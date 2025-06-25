<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurMenuController extends Controller
{
    public function index()
    {
        return view('ourmenu.index');
    }
}
