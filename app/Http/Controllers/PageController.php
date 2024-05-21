<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    // funzione index per passare tutti i film dal database alla view
    public function index(){
        $movies = Movie::all();
        dd($movies);

        return view('home');
    }
}
