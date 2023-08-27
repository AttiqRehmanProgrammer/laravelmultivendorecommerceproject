<?php

namespace App\Http\Controllers\frontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
      public function Contact()
    {
        return view('FrontEnd.Contact');
    }

}
