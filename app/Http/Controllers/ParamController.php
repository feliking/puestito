<?php

namespace App\Http\Controllers;

use App\Models\Param;
use Illuminate\Http\Request;

class ParamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Param::orderBy('id')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Param::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Params  $params
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Param::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Params  $params
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $param = Param::findOrFail($id);
        $param->fill($request->all());
        $param->save();
        return $param;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Params  $params
     * @return \Illuminate\Http\Response
     */
    public function destroy(Param $param)
    {
        //
    }
}
