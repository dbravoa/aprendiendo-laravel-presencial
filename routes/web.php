<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
#Estoy enviando la solicitud del usuario al controlador HomeController
Route::get('/', HomeController::class);

#Agrupación de rutas: Permite que muchas rutas puedan dirigirse a un solo controlador
Route::controller(ProductoController::class)->group(function () {
    #Llamando al ProductoController y a su método index
    Route::get('productos', 'index')->name('productos.inicio');
    ##Opcional
    Route::get('productos/crear', 'create')->name('productos.crear');
    Route::get('productos/actualizar', 'update');
    ##Opcional
    #Estamos haciendo una ruta con parámetros opcionales
    Route::get('productos/categoria/{categoria?}', 'filterCategory');
    #obteniendo el detalle de información de cada producto
    Route::get('productos/{producto}', 'show')->name('productos.detalle');
    Route::post('productos', 'store');
    Route::put('productos/{id}', 'edit');
    Route::delete('productos/{id}', 'delete');
});


/* #Llamando al ProductoController y a su método index
Route::get('productos', [ProductoController::class, 'index']);
##Opcional
Route::get('productos/crear', [ProductoController::class, 'create']);
Route::get('productos/actualizar', [ProductoController::class, 'update']);
##Opcional
#Estamos haciendo una ruta con parámetros opcionales
Route::get('productos/categoria/{categoria?}', [ProductoController::class, 'filterCategory']);
Route::get('productos/{producto}', [ProductoController::class, 'show']);
Route::post('productos', [ProductoController::class, 'store']);
Route::put('productos/{id}', [ProductoController::class, 'edit']);
Route::delete('productos/{id}', [ProductoController::class, 'delete']); */




#Creando nuestras rutas
#Estoy definiendo una ruta a la cual se va acceder por el verbo GET
#get('nombredelaruta',funcionamiento)
/* Route::get('productos', function () {
    #Imprimir en patalla lo que se encuentra en las comillas
    #Accederemos a la ruta /productos
    return "Esta es la pagina de productos";
}); */

/* Route::get('clientes', function () {
    return "Esta es la pagina de clientes";
}); */
#El navegador accede a esta ruta ya que ejecutará el verbo GET
/* Route::get('animales', function () {
    return "Esta es la pagina de animales";
}); */

/* #Creando una ruta con parámetros para acceder a un registro específico
Route::get('animales/{id}', function ($id) {
    return "Estoy viendo al animal con el id $id";
}); */

#Creando rutas a las cuales se accede por el verbo POST
#No hay problema si tiene el mismo nombre de rutas definidas anteriormente, debido a que la diferenciación principal se hace por el verbo
/* Route::post('animales', function () {
    return "Estoy creando un animal";
});

#Creando rutas a las cuales se accede por el verbo PUT
Route::put('animales/{id}', function ($id) {
    return "Aqui actualizaria al animal con el id $id";
}); */
