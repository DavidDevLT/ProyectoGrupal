<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function(){
    return redirect()->route('login');
});

Route::get('/', function () {
    /*return view('welcome');*/
    return "Bienvenido a la página principal";
});

//Agregando nueva ruta
Route::get('practicas-preprofesionales', function() {
    return "Bienvenido a la Gestión de Prácticas Preprofesionales";
});

//Agregando nueva ruta para cREAR un nuevo registro
Route::get('practicas/create', function() {
    return "En esta página podrás crear un nuevo proyecto.";
});

//Añadiendo rutas orientado al proyecto
Route::get('practicas/logout', function() {
    return "Ha salido exitosamente de su cuenta.";
});


Route::get('practicas/admin/cursos', function() {
    return "Información de los cursos";
});

Route::get('practicas/admin/horarios', function() {
    return "Información de los horarios";
});

Route::get('practicas/admin/mensajes', function() {
    return "Gestión de mensajes";
});

Route::get('practicas/help', function() {
    return "Soporte con preguntas frecuentes";
});

Route::get('practicas/contacto', function() {
    return "Información de contactos";
});


//Mejorando el código con las rutas: 1 variable y 2 variables
Route::get('practicas/{procedimiento}/{registro?}', function($procedimiento, $registro = null) {
    if($registro) { //condicional si se indica un registro
        return "Bienvenido al registro: $registro, del procedimiento $procedimiento";
    } else {
        return "Bienvenido al procedimiento: $procedimiento";
    }
});
