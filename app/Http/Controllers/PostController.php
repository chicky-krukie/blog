<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::getPostsByDate();
        return view('blog.index')->with('posts', $posts);

    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {

        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('sample_images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        Post::create($requestData);
        return redirect('blog')->with('flash_message', 'Blog Added!');
        //print_r($request->all());
        // print_r('test');
        // $input = $request->all();
        // Post::create($input);
        // return redirect('blog')->with('flash_message', 'Posted Successfully');
        // $post = new POST;
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();
        // print_r('test');
        

        
    }

    // public function store_image(Request $request){
    //     $requestData = $request->all();
    //     $fileName = time().$request->file('image')->getClientOriginalName();
    //     $path = $request->file('image')->storeAs('sample_images', $fileName, 'public');
    //     $requestData["image"] = '/storage/'.$path;
    //     Post::create($requestData);
    //     return redirect('blog')->with('flash_message', 'Blog Added!');
    // }


    public function show($id)
    {
        // print_r('show');
        $post = Post::find($id);
        return view('blog.show')->with('post', $post);
    }

    public function edit($id)
    {
        // print_r('edit');
        $post = Post::find($id);
        return view('blog.edit')->with('post', $post);
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
    
    public function search()
    {    $search_text = $_GET['title'];
        $posts = Post::where('title', 'LIKE', '%'.$search_text.'%')->get();

        return view('blog.search', compact('posts'));
    }

    // public function store_image(Request $request)
    // {
    //     $requestData = $request->all();
    //     $fileName = time().$request->file('image')->getClientOriginalName();
    //     $path = $request->file('image')->storeAs('sample_images', $fileName, 'public');
    //     $requestData["image"] = '/storage/'.$path;
    //     Post::create($requestData);
    //     return redirect('blog')->with('flash_message', 'Blog Added!');
    // }


    
}
