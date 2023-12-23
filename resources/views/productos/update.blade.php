{{-- Directiva de herencia de plantilla --}}
@extends('templates.plantilla')
{{-- Directiva para personalización de lo definido en nuestra plantilla --}}
@section('titulo', 'Pagina principal de productos')

{{-- En caso querramos definir código debemos utilizar la directiva section y endsection --}}
@section('contenido')
    <h1>Aqui va nuestro formulario para actualizar</h1>
@endsection
