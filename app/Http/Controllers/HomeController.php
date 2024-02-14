<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $posts = Post::orderBy('cerated_at', 'desc')->limit(4)->get();

        return view('home', ['posts' => $posts]);
    }
}
