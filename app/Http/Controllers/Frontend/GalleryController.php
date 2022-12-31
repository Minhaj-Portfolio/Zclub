<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('frontend.gallery');
    }

    //  Gallery sub functions

    public function one()
    {
        return view('frontend.Ali');
    }

    public function two()
    {
        return view('frontend.Bohemia');
    }

    public function three()
    {
        return view('frontend.Guru');
    }

    public function four()
    {
        return view('frontend.Imran');
    }

    public function five()
    {
        return view('frontend.Manpreet');
    }

    public function six()
    {
        return view('frontend.Micky');
    }

    public function seven()
    {
        return view('frontend.Monica');
    }

    public function eight()
    {
        return view('frontend.Raghav');
    }
}
