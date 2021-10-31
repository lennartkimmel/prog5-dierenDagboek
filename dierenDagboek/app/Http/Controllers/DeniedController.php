<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeniedController extends Controller
{
    public function index()
    {
        return view('denied');
    }
}
