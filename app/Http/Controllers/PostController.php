<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index(){
        $posts = Post::find(1);
        return view('Posts',['posts'=>$posts]);
    }
}
