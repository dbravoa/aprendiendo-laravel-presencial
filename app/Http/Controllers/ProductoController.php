<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    #Esta es la funcion para la ruta donde tendremos a todos los productos
    public function index()
    {
        $productos = Producto::paginate();
        //$productos = Producto::orderBy('nombre_producto', 'asc')->get();
        return view('productos.index', compact('productos'));
    }
    #Esta es la funcion para la ruta donde crearemos a los productos
    public function create()
    {
        return view('productos.create');
    }
    public function update()
    {
        return view('productos.update');
    }
    public function filterCategory($categoria = "todos")
    {
        return view('productos.filterCategory', compact('categoria'));
    }
    public function show($producto)
    {
        $productoDetalle = Producto::find($producto);
        //Compact: es una manera de representar un array asociativo
        //['producto'=>$producto] == compact('producto')
        return view('productos.show', compact('productoDetalle'));
    }
    #Estos métodos iran directo hacia la base de datos, no necesitan mostrar una vista, ya que toda su funcionalidad irá directo a BD
    public function store()
    {
        return "Estoy creando un producto, vuelve más tarde";
    }
    public function edit($id)
    {
        return "Estoy actualizando el producto con id $id, vuelve más tarde";
    }
    public function delete($id)
    {
        return "Estoy eliminando el producto con id $id, ya no vuelvas porque este registro no existirá más";
    }
}
