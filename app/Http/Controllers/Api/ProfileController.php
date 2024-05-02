<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        return response([ "data" => $profiles], Response::HTTP_OK);
    }

    public function show($id){
        $profiles = Profile::find($id);

        if(!$profiles){
            return response([ "message" => "usuario no encontrado"], Response::HTTP_NOT_FOUND);
        }
        return response([ "data" => $profiles], Response::HTTP_OK);
    }

    public function create(Request $request){
        $request->validate([
            'omited' => 'required'
        ]);

        //se crea un nuevo perfil
        $profile = new Profile();

        if($request->omited == "0") {
            $profile->photo = "";
            $profile->sex = "";
            $profile->birthdate = "";
            $profile->user_id = Auth::user()->id;
            $profile->save();
            return response($profile, Response::HTTP_CREATED);
        }
        
        $profile->photo = $request->photo;
        $profile->user_id = Auth::user()->id;
        $profile->sex = $request->sex;
        $profile->birthdate = $request->birthdate;
        $profile->save();

        return response($profile, Response::HTTP_CREATED);
    }

    public function edit(Request $request, $id){
        $profile = Profile::find($id);

        if(!$profile){
            return response(["message" => "Perfil no econtrado"], Response::HTTP_NOT_FOUND);
        }

        if($request->photo == "" && $request->sex == "" && $request->birthdate ==""){
            return response(["message" => "No hubo nada que actualizar"], Response::HTTP_OK);
        }
        if($request->photo){
           $profile->photo = $request->photo;
        }
        if($request->sex){
            $profile->sex = $request->sex;
         }
         if($request->birthdate){
            $profile->birthdate = $request->birthdate;
         }
         $profile->save();
        return response(["data" => $profile], Response::HTTP_OK);
    }

    public function destroy($id){
        $profile = Profile::find($id);

        if(!$profile){
            return response(["message" => "Perfil no econtrado"], Response::HTTP_NOT_FOUND);
        }

        $profile->delete();
        return response(["message" => "Perfil Eliminado Exitosamente"], Response::HTTP_OK);
    }
}
