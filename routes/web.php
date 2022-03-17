<?php

use Illuminate\Support\Facades\Route;
// Agregar controladores necesarios referenciandolos con su namespace
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\CursoController;

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

// Route::get('/', function () {
//     // Aqui puedo devolver cualquier cosa a la peticion http algo como una vista o una simle vista
//     // return "Un Texto";
//     return view('welcome');
// });

// Se puede y es mejor practica enviar la route a un controlador
Route::get('/', HomeControler::class);

Route::get('cursos', [CursoController::class, "index"])->name('cursos.index');
// Antigua manera de llamar controladores con laravel
// Route::get('cursos', 'CursoController@index'); // Ademas de esto abria que modificar el route service Provider agregando el namespace de los controladores

// Laravel lee las rutas en orden desendente
Route::get('cursos/create',  [CursoController::class, "create"])->name('cursos.create');

// Aqui Se ve un ejemplo de como obtener una variable atravez de una url
Route::get('cursos/{id}',  [CursoController::class, "show"])->name('cursos.show');

// Es importante crear Urls de tipo POST para recibir datos de formularios que pueden contener informacion importante, que queremos que tenga privacidad
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

// Esta url es para obtener la informacion del  curso y enviarla a la vista y formulario editar curso
Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// Esta es la url donde enviar el formulario editar curso y hacer el proceso para editar el curso
Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');


// Laravel Tamabien acepta mas de una variable en la url
// Tambien podemos predefinir una variable de la url en caso de obtener valores vacios
// Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso $curso, de la categoria $categoria"; 
//     }else {
//         return "Bienvenido al curso $curso";
//     }
// });

