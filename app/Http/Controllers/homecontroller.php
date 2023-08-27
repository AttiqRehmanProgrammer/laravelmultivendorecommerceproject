<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;

class homecontroller extends Controller
{
    public function redirect()

    {
        $usertype=Auth::user()->usertype;

        
        if($usertype=='1')
        {
            return view('Admin.home');

        }
        else{
            return view('');
        }

    }
}
