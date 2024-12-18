<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return redirect()->route('posts');
    }

    public function alerts()
    {
        return view('alerts');
    }

    public function liveSearch()
    {
        return view('live_search');
    }

    public function tasks()
    {
        return view('tasks');
    }
}
