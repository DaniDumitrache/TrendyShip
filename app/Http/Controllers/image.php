<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class image extends Controller
{
    public function imageup(Request $request)
    {
        if ($request->hasFile('MainImage')) {
            $file = $request->file('MainImage');
            $filenameWithExt = $request->file('MainImage')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('MainImage')->getClientOriginalExtension();
            $fileNameToStore = uniqid();
            $request->file('MainImage')->storeAs('/public/products/', $fileNameToStore . '.jpg');

            return $fileNameToStore;
        } else if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $filenameWithExt = $request->file('image1')->getClientOriginalName();
            $fileNameToStore = uniqid();
            $request->file('image1')->storeAs('/public/products/', $fileNameToStore . '.jpg');


            return $fileNameToStore;
        } else if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $filenameWithExt = $request->file('image2')->getClientOriginalName();
            $fileNameToStore = uniqid();
            $request->file('image2')->storeAs('/public/products/', $fileNameToStore . '.jpg');


            return $fileNameToStore;
        } else if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $filenameWithExt = $request->file('image3')->getClientOriginalName();
            $fileNameToStore = uniqid();
            $request->file('image3')->storeAs('/public/products/', $fileNameToStore . '.jpg');


            return $fileNameToStore;
        } else if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $filenameWithExt = $request->file('image4')->getClientOriginalName();
            $fileNameToStore = uniqid();
            $request->file('image4')->storeAs('/public/products/', $fileNameToStore . '.jpg');


            return $fileNameToStore;
        } else if ($request->hasFile('image5')) {
            $file = $request->file('image5');
            $filenameWithExt = $request->file('image5')->getClientOriginalName();
            $fileNameToStore = uniqid();
            $request->file('image5')->storeAs('/public/products/', $fileNameToStore . '.jpg');


            return $fileNameToStore;
        } else if ($request->hasFile('image6')) {
            $file = $request->file('image6');
            $filenameWithExt = $request->file('image6')->getClientOriginalName();
            $fileNameToStore = uniqid();
            $request->file('image6')->storeAs('/public/products/', $fileNameToStore . '.jpg');


            return $fileNameToStore;
        } else if ($request->hasFile('image7')) {
            $file = $request->file('image7');
            $filenameWithExt = $request->file('image7')->getClientOriginalName();
            $fileNameToStore = uniqid();
            $request->file('image7')->storeAs('/public/products/', $fileNameToStore . '.jpg');


            return $fileNameToStore;
        } else if ($request->hasFile('image8')) {
            $file = $request->file('image8');
            $filenameWithExt = $request->file('image8')->getClientOriginalName();
            $fileNameToStore = uniqid();
            $request->file('image8')->storeAs('/public/products/', $fileNameToStore . '.jpg');


            return $fileNameToStore;
        }
    }
}
