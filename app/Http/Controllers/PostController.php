<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth')->except('index', 'show');
//    }


    public function index(): \Inertia\Response|\Inertia\ResponseFactory
    {
        $posts = Post::all();

        $posts = PostResource::collection($posts)->resolve();

        return inertia('Post/Index', compact('posts'));
    }

    public function create(): \Inertia\Response|\Inertia\ResponseFactory
    {

        return inertia('Post/Create');
    }

    public function store (StoreRequest $request){
        $result = Post::create($request->validated());

        if($result){
//            dd(__METHOD__,$request->input());
            return redirect()->route('post.index');
        }
        return  back();
    }

    public function show(Post $post){
        return inertia('Post/Show', compact('post'));
    }
}
