<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    // view awal 
    public function viewAwal()
    {
        return view('home');
    }
}
