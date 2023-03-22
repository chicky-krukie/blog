<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('blog.index')->with('posts', $posts);

    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {

        $input = $request->all();
        Post::create($input);
        // return redirect('blog')->with('flash_message', 'Posted Successfully');
        // $post = new POST;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();
        // print_r('test');
        return redirect('blog')->with('success', 'Post created successfully!');

    }


    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('blog.edit')->with('posts', $post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $input = $request->all();
        $post->update($input);
        return redirect('blog')->with('flash_message', 'Updated Successfully');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('blog')->with('flash_message', 'Post Deleted Successfully');
    }
}
