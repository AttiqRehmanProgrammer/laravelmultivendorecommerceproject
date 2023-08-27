<?php

namespace App\Http\Controllers\frontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Addcart;
use App\Models\Product;
use App\Models\Order;
use Session;
use Stripe;

use App\Models\User;
class Homecontroller extends Controller
{
    public function index(){
        $showdate=Product::paginate(3);
        return view ('FrontEnd.UserPage',compact('showdate'));
    }



    public function redirect()

    {
        $usertype=Auth::user()->usertype;

        
        if($usertype=='1')
        {
             $data=User::all();
            $total_product=Product::all()->count();
            $total_order=Order::all()->count();
            $total_user=User::all()->count();
            $total_delivered=Order::where('Delivery_status','=','delivered')->get()->count();
            return view('Admin.home',compact('total_product','total_order','total_user','total_delivered','data'));

        }
        else{
            $showdate=Product::paginate(3);
            return view ('FrontEnd.UserPage',compact('showdate'));
        }

    }


public function product_Details ($id){
    $data=Category::all();
    $showdate=Product::paginate(3);

    $product=Product::find($id);
    // return view('FrontEnd.product_Details',compact('product','data','showdate'));
    // return view('FrontEnd.product_Details');
    if(Auth::id())
    {
          return view('FrontEnd.product_Details',compact('product','data','showdate'));
    }
    else
    {
        return redirect('login');
    }
  
}

public function Add_cart(){
    // $showdate=Product::paginate(3);
    // return view ('FrontEnd.UserPage',compact('showdate'));
    // return view('FrontEnd.add_to_cart');
    if(Auth::id())
    {
        //   $showdate=Product::paginate(3);
    // return view ('FrontEnd.UserPage',compact('showdate'));
    // return view('FrontEnd.add_to_cart');return redirect()->back();


    $id=Auth::user()->id;
    $cart=cart::where('user_id','=',$id)->get();
    return view('FrontEnd.add_to_cart',compact('cart'));
  
    }
    else
    {
        return redirect('login');
    }


}


// public function Addcart(Request $data )
// {
// if (session()->has('id'))
// {
    
   
//     $item=new Addcart();
// $item->quantity=$data->input('quantity	');
// $item->productId=$data->input('id');
// $item->userId=session()->get('id');
// $item->save();
// return redirect()->back()->with('sucess', 'congrstion item add cart');

// }
// else
// {
//     return redirect()->back()->with('error', 'congrstion item add not cart');
// } 
// }

public function Addcart(Request $request,$id){
    
    if(Auth::id())
    {
       $user=Auth::user();
    //    dd($user);
$product=product::find($id);
// dd($product);
$cart=new cart;
$cart->name=$user->name;
$cart->email=$user->email;
$cart->phone=$user->phone;
$cart->address=$user->address;
$cart->user_id=$user->id;

$cart->product_title=$product->title;

if($product->discount_price!=null)
{
    $cart->price=$product->discount_price *$request->quantity;  
}

else{
    $cart->price=$product->price *$request->quantity;
}
// $cart->price=$product->price;

$cart->image=$product->image;

$cart->Product_id=$product->id;
$cart->quantity=$request->quantity;

$cart->save();
return redirect()->back();


    }
    else
    {
        return redirect('login');
    }


}


public function remove_cart($id){
$cart=cart::find($id);
    $cart->delete();
    return redirect ()->back();
}
// Cash function 
public function cash_order(){
    $user=Auth::user();
    $userid=$user->id;
    
    $data=cart::where('user_id','=',$userid)->get();
    // dd($data);

    foreach($data as $data)
    {
      $order=new Order;
      $order->name=$data->name;

      $order->email=$data->email;

      $order->phone	=$data->phone;

      $order->address=$data->address;

      $order->user_id=$data->user_id;

      $order->product_title=$data->product_title;

      $order->quantity	=$data->quantity;

      $order->price=$data->price;

      $order->image=$data->image;

      $order->Product_id=$data->Product_id;

      $order->payment_status='cash on delivery';
      $order->Delivery_status='Processing';
      
      $order->save();
 
      $cart_id=$data->id;
      $cart=cart::find($cart_id);
      $cart->delete();
    }
    return redirect()->back()->with('message','We have Recevied Your Order.We Will Connect With You Soon.......');
}


public function stripe_card ($totalprice)
{
    // $showdate=Product::paginate(3);
    return view ('FrontEnd.stripe_card',compact('totalprice'));
}





public function stripePost(Request $request,$totalprice)

{
    
    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    Stripe\Charge::create ([
            "amount" => $totalprice * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Thanks for Payment." 
    ]);
    

    $user=Auth::user();
    $userid=$user->id;
    
    $data=cart::where('user_id','=',$userid)->get();
    // dd($data);

    foreach($data as $data)
    {
      $order=new Order;
      $order->name=$data->name;

      $order->email=$data->email;

      $order->phone	=$data->phone;

      $order->address=$data->address;

      $order->user_id=$data->user_id;

      $order->product_title=$data->product_title;

      $order->quantity	=$data->quantity;

      $order->price=$data->price;

      $order->image=$data->image;

      $order->Product_id=$data->Product_id;

      $order->payment_status='Paid';
      $order->Delivery_status='Processing';
      
      $order->save();
 
      $cart_id=$data->id;
      $cart=cart::find($cart_id);
      $cart->delete();
    }
  
    Session::flash('success', 'Payment successful!');
          
    return back();
}
}

