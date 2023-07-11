<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function home(){
    return view('home');
   }

   public function blog(){
    $posts = Post::get(); // traeme todas los post

    return view('blog', ['posts' => $posts]);
   }

   public function post(Post $post){
   
    return view('post', ['post' => $post]);
   }
}
