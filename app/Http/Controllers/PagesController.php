<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class PagesController extends Controller
{
    public function home(){
        $hotels = Hotel::all();
        return view('pages.home')->with('hotels', $hotels);
    }

    public function about(){
        return view('pages.about');
    }

    //try
    // public function gallery(){
    //     return view('pages.gallery');
    // }
}
