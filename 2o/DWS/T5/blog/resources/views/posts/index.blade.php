@extends('plantilla')
@section('titulo', 'Listado de posts')
@section('contenido')
<ul class="list-group list-group-flush">
@forelse ($posts as $post)

    <li class="list-group-item"><span>Titulo: {{$post->titulo}} ({{$post->user->login}})</span>
    <a href='{{ route('posts.show', $post->id) }}'><button class="btn btn-primary">Ver</button></a>
    <a href='{{ route('posts.edit', $post->id) }}'><button class="btn btn-warning" >Editar</button></a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">Borrar</button>
    </form></li>

@empty

@endforelse
</ul>
@endsection
