<!-- Utilizando correctamente las plastillas blade -->
<!-- Importante para que estas instrucciones sean reconocidas se debe tener un arhivo con
La Extencion .blade.php -->
@extends('layouts.layout')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la pagina principal de cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>
    {{-- Con el siguiente codigo se crean los botones para cambiar de pagina, y retroceder, un paginador predefinido en Laravel --}}
    {{$cursos->links()}}
@endsection