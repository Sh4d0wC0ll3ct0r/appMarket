<?php

namespace Market\Http\Controllers\Producto;

use Illuminate\Http\Request;

use Market\Http\Requests;
use Market\Http\Controllers\Controller;

class ProductoController extends Controller
{
    public function index(){
        return "Respondiendo desde el Index";
    }
}
