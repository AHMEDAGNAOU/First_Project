<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class statique extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    public function store() {
        return view('store');
    }
    public function style() {
        return view('style');
    }
    
}
