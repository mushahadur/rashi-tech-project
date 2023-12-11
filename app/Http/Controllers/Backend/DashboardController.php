<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index(){
      $userId = Auth::user()->id;
      $totalPost = Post::where('user_id', $userId)->count();
      
    return view('admin.pages.home.index', compact('totalPost'));
   }
}
