<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $title = "Molisana | Home";

        // return view('home',
        // [
        //     "title" => $title
        // ]);

        // versione compatta
        return view('home', compact('title'));
    }

    public function news() {
        return view('news'); 
    }
}
