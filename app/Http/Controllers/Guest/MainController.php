<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Models

use App\Models\Movie;

class MainController extends Controller
{
   public function index() {
    $movies = movie::all();

        return view("welcome",compact(("movies")));
    }
}
