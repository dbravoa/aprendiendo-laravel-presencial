{{-- Directiva de herencia de plantilla --}}
@extends('templates.plantilla')
{{-- Directiva para personalización de lo definido en nuestra plantilla --}}
@section('titulo', 'Pagina principal de productos')

{{-- En caso querramos definir código debemos utilizar la directiva section y endsection --}}
@section('contenido')
    <h1>En esta pagina veré todos los productos</h1>
    <a href="{{ route('productos.crear') }}">Crear Producto</a>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Categoria</th>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre_producto }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td><a href="{{ route('productos.detalle', $producto->id) }}">Ver Detalle</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $productos->links() }}
@endsection
