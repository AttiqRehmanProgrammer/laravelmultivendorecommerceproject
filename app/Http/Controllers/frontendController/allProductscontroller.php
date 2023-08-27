<?php

namespace App\Http\Controllers\frontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Addcart;
use App\Models\Product;
use App\Models\Order;
use Session;
use Stripe;
class allProductscontroller extends Controller
{
    public function allProduct()
    {

        $showdate=Product::paginate(3);
        return view ('FrontEnd.allProduct',compact('showdate'));
        // return view('FrontEnd.allProduct');
    }

}
