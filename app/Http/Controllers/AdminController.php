<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewIndex()
    {
      return view('rod-index');
    }

    public function viewLogin()
    {
      return view('rod-login');
    }

    public function viewContent()
    {
      return view('rod-contenido');
    }

    public function FunctionName()
    {
      # code...
    }
}
