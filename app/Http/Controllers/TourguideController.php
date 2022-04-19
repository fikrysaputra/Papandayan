<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourguideController extends Controller
{
    public function index()
    {
        return view('tourguide');
    }
}
