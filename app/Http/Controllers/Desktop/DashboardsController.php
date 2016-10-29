<?php

namespace Market\Http\Controllers\Desktop;

use Illuminate\Http\Request;

use Market\Http\Requests;
use Market\Http\Controllers\Controller;

class DashboardsController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function modelweb()
    {
        return view('modelweb');
    }
}
