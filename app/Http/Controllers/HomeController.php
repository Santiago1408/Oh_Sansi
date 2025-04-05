<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('home');
    }

    function registro()
    {
        return view('form-competidor');
    }
    function login()
    {
        return view('login');
    }
}
