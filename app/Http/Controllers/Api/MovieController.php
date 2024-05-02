<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index(Request $request){
        //accedemos al request para recopilar los querys en caso de que vengan en al ruta
        $query = $request->input('clasification_id');
        
        
        //se valida la existencia de querys en la ruta
        if(!$query){
            //no se encontraron querys por lo que se recopilan todos los recursos para servirlos al cliente
            $movies = Movie::all();
            return response([ "data" => $movies], Response::HTTP_OK);
        }
        
        //se detectaron querys por lo que se filtraran los recursos segun los querys solicitados.
        $movie = Movie::all()->where('clasification_id',$query);
        dd($movie);
        return response( $movie, Response::HTTP_OK);
        
    }

    public function show($id){
        $movie = Movie::find($id);
        if(!$movie){
            return response([ "message" => "Recurso no encontrado"], Response::HTTP_NOT_FOUND);
        }
        return response([ "data" => $movie], Response::HTTP_OK);
    }

    public function create(Request $request){
        $profile = Auth::user()->profile;

        if($profile->typeProfile == "2"){
            $request->validate([
                'name' => 'required',
                'releaseDate' => 'required',
                'synopsis' => 'required',
                'urlTrailer' => 'required',
                'image' => 'required',
                'clasification_id' => 'required',
                'director_id' => 'required',
                'user_id' => 'required'
            ]);

            $movie = new Movie();
            $movie->name = $request->name;
            $movie->releaseDate = $request->releaseDate;
            $movie->synopsis = $request->synopsis;
            $movie->urlTrailer = $request->urlTrailer;
            $movie->image = $request->image;
            $movie->clasification_id = $request->clasification_id;
            $movie->director_id = $request->director_id;
            $movie->user_id = $request->user_id;
            $movie->save();

            return response(["data" => $movie], Response::HTTP_CREATED);
        }
        return response(["message" => "No estas autorizado para realizar esta acción"], Response::HTTP_FORBIDDEN);
    }

    public function edit(Request $request, $id){
        $profile = Auth::user()->profile;

        if($profile->typeProfile == "2"){
            $movie = Movie::find($id);

            if(!$movie){
                return response(["message" => "Recurso no econtrado"], Response::HTTP_NOT_FOUND);
            }

            if($request->name == "" && $request->releaseDate == "" && $request->synopsis =="" && $request->urlTrailer == "" && $request->image == "" && $request->clasification_id =="" && $request->director_id ==""){
                return response(["message" => "No hubo nada que actualizar"], Response::HTTP_OK);
            }
            if($request->name){
                $movie->name = $request->name;
             }
             if($request->releaseDate){
                 $movie->releaseDate = $request->releaseDate;
              }
              if($request->synopsis){
                 $movie->synopsis = $request->synopsis;
              }
              if($request->urlTrailer){
                $movie->urlTrailer = $request->urlTrailer;
             }
             if($request->image){
                 $movie->image = $request->image;
              }
              if($request->clasification_id){
                 $movie->clasification_id = $request->clasification_id;
              }
              if($request->director_id){
                $movie->director_id = $request->director_id;
             }
             $movie->save();
             return response(["data" => $movie], Response::HTTP_OK);
        }
    }

    public function destroy($id){
        $profile = Auth::user()->profile;

        if($profile->typeProfile == "2"){
            $movie = Movie::find($id);

            if(!$movie){
                return response(["message" => "Recurso no econtrado"], Response::HTTP_NOT_FOUND);
            }

            $movie->delete();
            return response(["message" => "Recurso Eliminado Exitosamente"], Response::HTTP_OK);
        }
        return response(["message" => "No estas autorizado para realizar esta acción"], Response::HTTP_FORBIDDEN);
    }
}
