<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function gallery()
    {
        return view('frontend.gallery');
    }
}
