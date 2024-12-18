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

    public function posts(Request $request)
    {
        $page = $request->query('page', 1);
        $limit = $request->query('limit', 10);
        $search = $request->query('search', '');
        $sortColumn = $request->query('sort_column', 'id');
        $sortDirection = $request->query('sort_direction', 'asc');

        $response = $this->service->getPosts($page, $limit, $search, $sortColumn, $sortDirection);

        $data = [
            'posts' => $response['data'],
            'current_page' => $response['page'],
            'total_pages' => ceil($response['total'] / $limit),
            'total_records' => $response['total'],
            'limit' => $limit,
            'sort_column' => $sortColumn,
            'sort_direction' => $sortDirection,
        ];

        if ($request->ajax()) {
            return response()->json([
                'html' => view('post.partials.table', $data)->render(),
            ]);
        }

        return view('post.index', $data);
    }

}
