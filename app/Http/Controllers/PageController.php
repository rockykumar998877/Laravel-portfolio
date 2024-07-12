<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    public function education(){
        return view('education');
    }

    public function experience(){
        return view('experience');
    }
    public function skill(){
        return view('skill');
    }

}
