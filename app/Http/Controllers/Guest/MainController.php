<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Models

use App\Models\Movie;

class MainController extends Controller
{
   public function index() {
    $movies = movie::where("vote" ,">=",8)->get();
    $movies = movie::where("vote" ,">=",8)->orwhere("nationality","american   ")->get();
        return view("welcome",[
            "movies"=>$movies 
        ]);
     }
     public function show($id){
        $movie = Movie::findOrFail($id);
        return view("show",[
            "movie"=>$movie
        ]);
     }
}
