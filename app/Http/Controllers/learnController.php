<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class learnController extends Controller
{
    //
    public function learn_more() {
        return view('learn_more');
    }
    public function singin() {
        return view('singin');
    }
    public function singup() {
        return view('singup');
}}
