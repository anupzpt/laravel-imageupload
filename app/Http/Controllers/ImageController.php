<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $photos= Image::all();
        return view('welcome', compact('photos'));
    }
    public function uploadImage(Request $request)
    {
        if($request->hasFile('image'))
        {
            $image =$request->file('image');
            $response = $image->store('images','public');
            $photo= new Image();
            $photo->name= $response;
            $photo->save();
            return back();
            // dd(asset('/storage/' .$response));
        }
    }
}
