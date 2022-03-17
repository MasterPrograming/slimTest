@extends('layouts.layout')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al Curso {{$curso->name}}</h1>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->description}}</p>
@endsection