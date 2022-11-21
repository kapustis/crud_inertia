<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth')->except('index', 'show');
//    }

    /**
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function index(): \Inertia\Response|\Inertia\ResponseFactory
    {
        $posts = Post::all();

        $posts = PostResource::collection($posts)->resolve();

        return inertia('Post/Index', compact('posts'));
    }

    /**
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function create(): \Inertia\Response|\Inertia\ResponseFactory
    {

        return inertia('Post/Create');
    }

    /**
     * @param StoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $result = Post::create($request->validated());

        if ($result) {

            return redirect()->route('post.index');
        }

        return back();
    }

    /**
     * @param Post $post
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function show(Post $post)
    {
        return inertia('Post/Show', compact('post'));
    }

    /**
     * @param Post $post
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function edit(Post $post)
    {

        return inertia('Post/Edit', compact('post'));
    }

    /**
     * @param Post $post
     * @param UpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Post $post, UpdateRequest $request)
    {
        dd(__METHOD__,$post);
        $result = $post->update($request->validated());

        if ($result) {
            return redirect()->route('post.show', $post->id);
        }

        return back();
    }


    public function destroy(Post $post)
    {

        $post->delete();

        return redirect()->route('post.index');

    }
}
