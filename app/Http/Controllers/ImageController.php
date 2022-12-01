<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        if($request->hasFile('image'))
        {
            $image =$request->file('image');
           $response = $image->store('images','public');
            return back();
            // dd(asset('/storage/' .$response));
        }
    }
}
