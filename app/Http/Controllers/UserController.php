<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // OBTENER LA VISTA DE REGISTRO
    public function getRegistration()
    {
        return view('registro');
    }

    // OBTENER LA VISTA DE LOGIN
    public function getLogin()
    {
        return view('login');
    }

    // REGISTRAR USUARIOS
    public function createUser(Request $request)
    {
      $validator = Validator::make($request->all(),[
        'title' => 'required|max:255',
        'campo' => 'required'
      ]);

      if ($validator -> fails()) {
        # code...
      }
    }
}
