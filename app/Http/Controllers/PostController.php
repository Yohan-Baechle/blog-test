<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPostsRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index (SearchPostsRequest $request) {

        $query = Post::query();

        if ($request->validated('title')) {
            $query = $query->where('title', 'like', "%{$request->validated('title')}%");
        }  

        return view('post.index', [
            'posts' => $query->paginate(16),
            'input' => $request->validated()
        ]);
    }

    public function show (string $slug, Post $post) {

        if ($slug !== $post->getSlug()) {
            return to_route('post.show', ['slug' => $post->getSlug(), 'post' => $post]);
        }

        return view('post.show', [
            'post' => $post
        ]);
    }
}
