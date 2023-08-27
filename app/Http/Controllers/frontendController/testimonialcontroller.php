<?php
namespace App\Http\Controllers\frontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class testimonialcontroller extends Controller
{
    public function testimonial()
    {
        return view('FrontEnd.testimonial');
    }
}
