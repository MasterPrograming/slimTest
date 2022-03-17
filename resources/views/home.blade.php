<!-- Utilizando correctamente las plastillas blade -->
<!-- Importante para que estas instrucciones sean reconocidas se debe tener un arhivo con
La Extencion .blade.php -->
@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <h1>Bienvenido a la pagina principal</h1>
    <h6>Jenifer Swin</h6>
    <form action="">
        <fieldset>
            <legend>Formulario</legend>
            <label for="">Un Campo</label>
            <input type="number" name="" id="">
        </fieldset>
    </form>
@endsection