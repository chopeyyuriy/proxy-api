<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    public function posts()
    {
        $data['posts'] = $this->service->getPosts();

        return view('post.index', $data);
    }
}
