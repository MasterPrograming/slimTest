@extends('layouts.layout')

@section('title', 'Cursos')

@section('content')
    <h1>En esta pagina puedes crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        <label for="">
            @csrf
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="">
            Descripcion:
            <br>
            <textarea name="descripcion" id="" cols="30" rows="10">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="">
            Categoria:
            <br>
            <input type="text" name="categoria" id="" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <input type="submit" value="enviar">
    </form>
@endsection