<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        $data = "Forest";
        return view('welcome', compact('data'));
    }

    function about(){
        return view('about');
    }

    function aboutDetails($data){
        dd($data);
    }

    function contact(){
        return view('contact');
    }
}
