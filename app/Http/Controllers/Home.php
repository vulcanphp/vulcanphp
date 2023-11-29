<?php

namespace App\Http\Controllers;

use VulcanPhp\Core\Foundation\Controller;

class Home extends Controller
{
    public function index()
    {
        return view('public.welcome');
    }
}
