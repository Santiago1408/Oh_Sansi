<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function registro()
    {
        return view('form-competidor');
    }
    
    public function login()
    {
        return view('login');
    }
}
