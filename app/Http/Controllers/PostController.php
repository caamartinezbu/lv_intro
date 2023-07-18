<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\support\Str;

use function Pest\Laravel\post;

class PostController extends Controller
{
    public function index() //listar post
    {
        return view('posts.index', ['posts' => Post::latest()->paginate()]);
    }

    //creamos el método eliminar, para eliminar publicaciones y le decimos que nos etorne atras en las rutas usando el en rutamiento de laravel nativo


    public function create(Post $post)
    { //formulario de crear
        return view('posts.create', ['post' => $post]);
    }

    public function store(Request $request)
    { // función de crear y guardar
        $request->validate([
            'title'=> 'required',
            'slug'=> 'required|unique:posts,slug', //unique:table,column,except,id',
            'body'=> 'required',

         ],[
            'title.required'=>'Debe ingresar el título.',
            'slug.required'=>'Debe ingresar una URL diferente',
            'slug.unique'=>'La URl ya existe.',
            'body.required'=>'Debe ingresar el contenido del post.',
        ]);
        $post = $request->user()->posts()->create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,

        ]);
        return redirect()->route('posts.edit', $post);
    }


    public function edit(Post $post)
    { // formulario de editar
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    { // función de editar y guardar
        $request->validate([
            'title'=> 'required',
            'slug'=> 'required|unique:posts,slug,' . $post->id, //unique:table,column,except,id',
            'body'=> 'required',

        ],[
            'title.required'=>'Debe ingresar el título.',
            'slug.required'=>'Debe ingresar una URL diferente',
            'slug.unique'=>'La URl ya existe.',
            'body.required'=>'Debe ingresar el contenido del post.',
        ]);

        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,

        ]);
        return redirect()->route('posts.index', $post);
    }





    public function destroy(Post $post)
    {

        $post->delete();

        return back();
    }
}
