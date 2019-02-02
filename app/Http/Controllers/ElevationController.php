<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElevationController extends Controller
{
    public function index($title = 'Elevation Project')
    {
        return view('elevation.index', compact('title'));
    }
}
