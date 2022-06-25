<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Document;
use App\Models\Product;
use App\Services\UploadFilesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::with('category', 'colors', 'documents')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $product = Product::create($request->all());
            foreach ($request->colors as $color) {
                Color::create([
                    'code' => $color,
                    'product_id' => $product->id
                ]);
            }
            foreach ($request->documents as $file) {
                $document = Document::create([
                    'path' => $file
                ]);
                $product->documents()->attach($document->id);
            }
            DB::commit();
            return $product;
        } catch (\Exception $e) {
            DB::rollBack();
            abort(500, $e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try{
            $product = Product::findOrFail($id);
            $product->fill($request->all());
            $product->save();
            Color::where('product_id', $product->id)->delete();
            foreach ($request->colors as $color) {
                Color::create([
                    'code' => $color,
                    'product_id' => $product->id
                ]);
            }
            DB::commit();
            return [
                'product' => $product
            ];
        } catch (\Exception $e) {
            DB::rollBack();
            abort(500, $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function deleteFile (Request $request) {
        $document = Document::findOrFail($request->file_id);
        Storage::disk('uploads')->delete($document->path);
        $document->products()->detach();
        $document->delete();
        return [
            'message' => 'Archivo eliminado'
        ];
    }

    public function changeStateProduct (Request $request) {
        $product = Product::findOrFail($request->product_id);
        $product->state = $request->state;
        $product->save();
        return $product;
    }
}
