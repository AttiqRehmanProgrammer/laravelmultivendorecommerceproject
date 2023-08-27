<?php

namespace App\Http\Controllers\frontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    public function blog()
    {
        return view('FrontEnd.blog');
    }
}
