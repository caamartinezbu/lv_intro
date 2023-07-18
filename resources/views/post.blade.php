@extends('template')

@section('content')


<div class="max-w-3xl mx-auto">
	<h1 class="text-5xl mb-8">{{ $post->title }}</h1>
<span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">{{$post->user->name}}</span>
<span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">{{$post->created_at->format('d / m / Y | H:i')}}</span>
<br>
	<p class="leading-loose text-lg text-gray-700">
		{{ $post->body }}
	</p>
</div>


@endsection