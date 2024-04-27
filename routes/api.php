<?php

use App\Http\Controllers\Api\AuthController;
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

    //Route para obtener todos los perfiles
    Route::get('/profile/{id}', [ApiProfileController::class,'show']);

    //Route Eliminar un perfil ya existente
    Route::delete('/profile/{id}', [ApiProfileController::class,'destroy']);

    //Route crear un nuevo perfil
    Route::post('/profile', [ApiProfileController::class,'create']);

    //Route Actualizar un perfil ya existente
    Route::put('/profile/{id}', [ApiProfileController::class,'edit']);
});


    

    
