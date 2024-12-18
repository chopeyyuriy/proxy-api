<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts')->json();

        return view('index');
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
