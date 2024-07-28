<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helperController extends Controller
{
    public function index() {
        return view('helper.index');
    }
}
