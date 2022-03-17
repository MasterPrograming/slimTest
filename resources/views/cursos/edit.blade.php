@extends('layouts.layout')

@section('title', 'Cursos')

@section('content')
    <h1>En esta pagina puedes editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf

        @method('put')
        
        <label for="">            
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        <br>
        @error('name')
            <small>{{$message}}</small>
        @enderror
        <label for="">
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10">{{old('descripcion', $curso->description)}}</textarea>
        </label>
        @error('descripcion')
            <small>{{$message}}</small>
        @enderror
        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" id="" value="{{old('categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
            <small>{{$message}}</small>
        @enderror
        <br>
        <input type="submit" value="Actualizar formulario">
    </form>
@endsection