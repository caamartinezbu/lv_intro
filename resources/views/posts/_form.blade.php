@csrf
<!-- Campo titulo -->
<label class="uppercase text-white-700 text-xs">Título</label><br>
<span class="text-xs text-red-500">@error('title') {{$message}} @enderror</span>
<input 
type="text" 
name="title"   
placeholder="Nombre" 
class="rounded border-gray-200 w-full mb-4 text-black" 
value="{{old('title', $post->title)}}">
<!-- Campo URl -->
<label class="uppercase text-white-700 text-xs">Slug o Url</label><br>
<span class="text-xs text-red-500">@error('slug') {{$message}} @enderror</span>
<input 
type="text" 
name="slug"   
placeholder="slug" 
class="rounded border-gray-200 w-full mb-4 text-black" 
value="{{old('slug', $post->slug)}}">

<!-- Campo descripción  -->
<label class="uppercase text-white-700 text-xs">Contenido</label> <br>
<span class="text-xs text-red-500">@error('body') {{$message}} @enderror</span>
<textarea 
name="body" 
rows="10" 
placeholder="Descripción"  
class="rounded border-gray-200 w-full mb-4 text-black">{{ old('body', $post->body)}}</textarea>

<div class=" flex justify-between items-center">
    <a href="{{ route('posts.index')}}" class="rounded px-4 py-2">Atrás</a>

    <input type="submit" value="Enviar" class="bg-blue-800 text-white rounded px-4 py-2">
</div>