<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*$newPost = new Post;
        $newPost->title = 'new posts';
        $newPost->short_content = 'new post short content';
        $newPost->content = 'new post content';
        $newPost->photo = '/storage/new_post.png';

        $newPost->save();*/

        /*$newPost = Post::create([
            'title' => '5',
            'short_content' => 'short',
            'content' => 'content 123',
            'photo' => 'photo.jpg'
        ]);*/

        /*$post = Post::find(4);
        $post->title = "O'zgartirilgan sarlavha";
        $post->save();*/

//        $post = Post::find(4)->update(['title' => "2 O'zgartirilgan sarlavha"]);

//        $post = Post::find(5);
//        $post->delete();

//        Post::destroy(1);

        Post::withTrashed()->find(1)->restore();

//        Post::destroy(1);
        $posts = Post::all();
        dd($posts);

//        return view('posts.index');
        return 'success deleted';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
