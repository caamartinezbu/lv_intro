<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function Pest\Laravel\post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Post::latest()->paginate() ]);
    }

//creamos el método eliminar, para eliminar publicaciones y le decimos que nos etorne atras en las rutas usando el en rutamiento de laravel nativo
    

    public function create(Post $post){
        return view('posts.create',['post'=>$post]);
    }


    public function edit(Post $post){
        return view('posts.edit', ['post'=>$post]);


    }

    public function destroy(Post $post)
    {

        $post->delete();

        return back();
    }



}
