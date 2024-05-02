<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GenderController;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\ProfileController as ApiProfileController;
use Illuminate\Support\Facades\Route;

//Route principal
Route::get('/',[AuthController::class,'Index']);

//Route para registrar un nuevo usuario
Route::post('/register',[AuthController::class,'Register']);

//Route para Logear un usuario
Route::post('/login',[AuthController::class,'Login']);

//Route para Logear un usuario
Route::get('/loggout',[AuthController::class,'Loggout']);

//Route con middleware para la proteccion de rutas
Route::group(['middleware' => ['auth:sanctum']], function (){

    //Route para obtener la información del usuario en sesión
    Route::get('/user-profile',[AuthController::class, 'GetUserProfile']);

    //Route para obtener todos los perfiles
    Route::get('/profile', [ApiProfileController::class,'index']);
    //Route para obtener un perfil en especifico
    Route::get('/profile/{id}', [ApiProfileController::class,'show']);
    //Route Eliminar un perfil ya existente
    Route::delete('/profile/{id}', [ApiProfileController::class,'destroy']);
    //Route crear un nuevo perfil
    Route::post('/profile', [ApiProfileController::class,'create']);
    //Route Actualizar un perfil ya existente
    Route::put('/profile/{id}', [ApiProfileController::class,'edit']);


    //Route Obtener un recurso en especifico
    Route::get('/movie/{id}', [MovieController::class,'show']);
    //Route Crear un nuevo recurso 
    Route::post('/movie', [MovieController::class,'create']);
    //Route Editar un recurso en especifico
    Route::put('/movie/{id}', [MovieController::class,'edit']);
    //Route Eliminar un recurso en especifico
    Route::delete('/movie/{id}', [MovieController::class,'destroy']);

    //Route Obtener Todos los generos
    Route::get('/gender', [GenderController::class,'index']);

});

    //Route Obtener Todos los recursos
    Route::get('/movie', [MovieController::class,'index']);
   




    

    
