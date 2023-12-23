<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

#Laravel ha creado el controlador HomeController con todo lo necesario para empezar a trabajar
class HomeController extends Controller
{
    #define una ruta con una sola función, si tuviesemos más funciones esto no funciona
    public function __invoke()
    {
        return "Esta es la página de inicio";
    }
}
