<?php

namespace Market\Http\Controllers\Desktop;

use Illuminate\Http\Request;

use Market\Http\Requests;
use Market\Http\Controllers\Controller;

class AdministradorController extends Controller
{
    public function panel(){
        return view('administrador/panel');
    }
    public function access(){
        return view('administrador/access');
    }
    public function reports(){
        return view('administrador/reports');
    }
}
