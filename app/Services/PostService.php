<?php


namespace App\Services;


use Illuminate\Support\Facades\Http;

class PostService
{
    /**
     * User id
     */
    const USER_ID = 1;

    protected $baseUrl = 'https://jsonplaceholder.typicode.com';

    public function getPosts($page, $limit, $search, $sortColumn, $sortDirection)
    {
        $query = Http::get("{$this->baseUrl}/posts")->json();

        // Searching
        if (!empty($search)) {
            $query = array_filter($query, function ($post) use ($search) {
                return stripos($post['id'], $search) !== false ||
                    stripos($post['title'], $search) !== false ||
                    stripos($post['body'], $search) !== false;
            });
        }

        // Sorting
        usort($query, function ($a, $b) use ($sortColumn, $sortDirection) {
            return $sortDirection === 'asc'
                ? strcmp($a[$sortColumn], $b[$sortColumn])
                : strcmp($b[$sortColumn], $a[$sortColumn]);
        });

        // Pagination
        $offset = ($page - 1) * $limit;
        $data = array_slice($query, $offset, $limit);

        return [
            'data' => $data,
            'page' => $page,
            'total' => count($query),
        ];
    }

    public function getPost($id)
    {
        return Http::get("{$this->baseUrl}/posts/{$id}")->json();
    }

    public function createPost($data)
    {
        return Http::post("{$this->baseUrl}/posts", $data)->json();
    }

    public function updatePost($data)
    {
        return Http::put("{$this->baseUrl}/posts/{$data['id']}", $data)->json();
    }

    public function deletePost($id)
    {
        return Http::delete("{$this->baseUrl}/posts/{$id}")->status();
    }
}
