@extends('plantilla')
@section('titulo', 'Listado de posts')
@section('contenido')
@forelse ($posts as $post)
    <br>
    <span>Titulo: {{$post->titulo}} ({{$post->user->login}})</span>
    <a href='{{ route('posts.show', $post->id) }}'><button>Ver</button></a>
    <br><br>
@empty

@endforelse
@endsection
