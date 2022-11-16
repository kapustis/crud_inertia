<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(): \Inertia\Response|\Inertia\ResponseFactory
    {

        return inertia('Post/Index');
    }

    public function create(): \Inertia\Response|\Inertia\ResponseFactory
    {

        return inertia('Post/Create');
    }
}
