<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Http\Requests\StorePostRequest;
use App\Jobs\ChangePost;
use App\Jobs\UploadBigFile;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Notification;
use Mail;
use Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->authorizeResource(Post::class, 'post');
        $this->middleware('password.confirm')->only('edit');
    }

    public function index()
    {
        $posts = Cache::remember('posts',now()->addSeconds(30), function () {
            return Post::latest()->get();
        });

        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('posts.create')->with([
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    public function store(StorePostRequest $request)
    {
        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photo', $name);
        }

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path ?? null
        ]);

        if (isset($request->tags)) {
            foreach ($request->tags as $tag) {
                $post->tags()->attach($tag);
            }
        }

        PostCreated::dispatch($post);

        ChangePost::dispatch($post)->onQueue('uploading');

        Mail::to($request->user())->later(now()->addSeconds(5), (new \App\Mail\PostCreated($post))->onQueue('sending-mails'));

//        auth()->user()->notify(new \App\Notifications\PostCreated($post));
        Notification::send(auth()->user(), new \App\Notifications\PostCreated($post));

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post,
            'recent_posts' => Post::latest()->get()->except($post->id)->take(5),
            'categories' => Category::all(),
            'tags' => Tag::all(),
        ]);
    }

    public function edit(Post $post)
    {

        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(StorePostRequest $request, Post $post)
    {

        if ($request->hasFile('photo')) {

            if (isset($post->photo)) {
                Storage::delete($post->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photo', $name);
        }

        $post->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            'photo' => $path ?? $post->photo
        ]);

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function destroy(Post $post)
    {
        if (isset($post->photo)) {
            Storage::delete($post->photo);
        }

        $post->delete();

        return redirect()->route('posts.index');
    }

}
