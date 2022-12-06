<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DB;
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
//        $posts = DB::table('posts')->where('title','assds')->get();
//        $posts = DB::table('posts')->find(5);
//        $posts = DB::table('posts')->get()->pluck('title');
//        $posts = DB::table('posts')->get()->chunk(2);
//        $posts = DB::table('posts')->count();
//        $posts = DB::table('posts')->whereIn('id', [2, 1]);
//        $posts = DB::table('posts')->latest()->get();

        /*$posts = DB::table('posts')->insert([
            'title' => '123',
            'short_content' => '123',
            'content' => '123',
            'photo' => '123',
        ]);*/

        DB::table('posts')->where('id', 1)->delete();

//        dd($posts);

        return 'success';
//        return view('posts.index');
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
