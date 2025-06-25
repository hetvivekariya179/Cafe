<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReViewController extends Controller
{
    public function index()
    {
        return view('review.index');
    }
}
