<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'DESC')->take(3)->get();
        return view('website.pages.home.index', compact('posts'));
    }
}
