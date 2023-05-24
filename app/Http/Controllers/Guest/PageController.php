<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function movies() {
        $movies = (Movie::all());
        return view('welcome', compact('movies'));
    }
}
