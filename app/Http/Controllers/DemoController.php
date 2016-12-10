<?php

namespace Market\Http\Controllers;

use Illuminate\Http\Request;

use Market\Http\Requests;

class DemoController extends Controller
{
      public function index()
    {
      return "USTED ES EL ADMINISTRADOR DEL SISTEMA";
    }
}
