{{-- Directiva de herencia de plantilla --}}
@extends('templates.plantilla')
{{-- Directiva para personalización de lo definido en nuestra plantilla --}}
@section('titulo', 'Pagina principal de productos')

{{-- En caso querramos definir código debemos utilizar la directiva section y endsection --}}
@section('contenido')
    {{-- Podemos recibir parámetros a través de llaves --}}
    <h2>Este es el detalle del producto {{ $productoDetalle->nombre_producto }}</h2>
    <ul>
        <li>Categoria: {{ $productoDetalle->categoria }}</li>
        <li>Precio: S/ {{ $productoDetalle->precio }}</li>
        <li>Stock: {{ $productoDetalle->stock }}</li>
    </ul>

    <a href="{{ route('productos.inicio') }}">Regresar a la lista</a>
@endsection
