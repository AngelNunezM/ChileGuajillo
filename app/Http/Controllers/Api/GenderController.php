<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GenderController extends Controller
{
    public function index(){
        $gender = Gender::all();
        return response([ "data" => $gender], Response::HTTP_OK);
    }
}
