<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function filestore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,webp',
        ]);

        //Upload images
        $imageName = null;
        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }


        //Add new post
        $post = new Post;

        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $imageName;

        $post->save();

        return redirect()->route('home')->with('success', 'Your post created successfully !');
    }
}
