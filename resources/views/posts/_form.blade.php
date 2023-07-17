@csrf

<label class="uppercase text-white-700 text-xs">Título</label>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4 text-black" value="{{$post->title}}">

<label class="uppercase text-white-700 text-xs">Contenido</label>
<textarea name="body" rows="10" class="rounded border-gray-200 w-full mb-4 text-black">{{ $post->body}}</textarea>

<div class=" flex justify-between items-center">
    <a href="{{ route('posts.index')}}" class="rounded px-4 py-2">Atrás</a>

    <input type="submit" value="Enviar" class="bg-blue-800 text-white rounded px-4 py-2">
</div>