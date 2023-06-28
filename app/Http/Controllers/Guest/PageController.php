<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        //recupero prima i link nella pg di prima
        $links = config('store.someLinks');
        //recupero i dati dal database
        $movies = Movie::all();

        return view('welcome',compact('movies','links'));
    }

    public function other(){
        //recupero prima i link nella pg di prima
        $links = config('store.someLinks');
        //recupero i dati dal database
        $movies = Movie::all();

        return view('other',compact('movies','links'));
    }
}
