<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageValidationController extends Controller
{

    public function index()
    {
        return view('image-validation');
    }

    public function post(Request $request)
    {
        $request->validate([
            'image' => 'bail|required|file|image|mimes:png,jpg|mimetypes:image/jpeg,image/png|max:2000'
        ]);
        $request->image->store('public');
        return redirect()->back()->with('success', 'Good, your image is valid');
    }

}
