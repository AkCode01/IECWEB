<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FatawaController extends Controller
{
    public function index(){
      return view("fatawa");
    }
}
