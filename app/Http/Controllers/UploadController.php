<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class UploadController extends Controller
{
    public function upload():View
    {
        return view("profile.upload");
    }
    public function cropImage(Request $request){
        $folderPath = public_path("/image/users/");
        $imageParts = explode(";base64,",$request->image);
        $imageTypeAux = explode('image/',$imageParts[0]);
        $imageType = $imageTypeAux[1];
        $imageBase64 = base64_decode($imageParts[1]);
        $imageName = \Auth::user()->id.'.png';
        $imagePath = $folderPath.$imageName;
        file_put_contents($imagePath,$imageBase64);
        \Auth::user()->photo = $imageName;
         \Auth::user()->save();
         return response()->json(['success'=>'Successfully']);
    }
}
