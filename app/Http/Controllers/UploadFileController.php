<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UploadFileController extends Controller
{
    public function uploadFile(Request $request)
    {
        $file = $request->file('file');
        if(is_array($file)){
            $stored = [];
            foreach($file as $f) {
                $nombre_unico = $request->path.uniqid().'.'.$f->getClientOriginalExtension();
                Storage::disk('uploads')->put($nombre_unico,  File::get($f));
                $stored[] = 'uploads/'.$nombre_unico;
            }
            return implode(',', $stored);
        } else {
            $nombre_unico = $request->path.uniqid().'.'.$file->getClientOriginalExtension();
            Storage::disk('uploads')->put($nombre_unico,  File::get($file));
            return 'uploads/'.$nombre_unico;
        }
    }

    /**
     * Convierte bas64 a archivo png
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uploadFileBase64Image(Request $request)
    {
        $image = $request->base64;
        $image = explode(',', $image);
        $image = str_replace(' ', '+', $image);
        $nombre_unico = $request->path.uniqid().'.'.'png';
        Storage::disk('uploads')->put($nombre_unico,  base64_decode($image[1]));
        return 'uploads/'.$nombre_unico;
    }

    /**
     * elimina file
     *
     * @param  string $string
     * @return \Illuminate\Http\Response
     */
    public function deleteFile(Request $request)
    {
        $image = explode('/', $request->nombre);
        Storage::disk('uploads')->delete($image[1].'/'.$image[2]);
        return $request->nombre;
    }
}
