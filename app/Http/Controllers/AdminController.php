<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use PDF;
class AdminController extends Controller
{
    public function view_Catagory()
    {
        return view('Admin.catagory');
    }



    
    public function add_Catagory(Request $request)
    {

      $data=new Category;
      $data->category=$request->Catagory;
      $data->save();
      return redirect('/cate_table')->with('message','Category Added SuccessFully'  );
    }


    public function cate_table()
    
    {

      $data=Category::all();
        return view('Admin.cate_table ',compact('data'));

      
    }

    


    

  public function delete($id){

    category::find($id)->delete();
    return redirect()->back()->with('message','Category Deleted Successfuly');

    
        }


        public function testing($id){

          $Cate = Category::find($id);
          // return View('Admin.edit_cate')->with(compact('Cate'));
          return view('Admin.edit_cate ',compact('Cate'));
      
      }


      public function update (Request $request,$id)
      {
     
          
          $date = product::get($id);
          $date->category=$request['category'];
          $date->update();
          return redirect('/')->with('mesage','Category Deleted Successfuly');

          
  }



  public function order()
  {
    $orders=Order::all();
      return view('Admin.view_order',compact('orders'));
  }

  public function Delivered($id)
  {
    $order=Order::find($id);
    $order->Delivery_status="Delivered";
    $order->payment_status='paid';
    $order->save();
    return redirect()->back();
      // return view('Admin.view_order',compact('orders'));
  }
  public function Print_PDF($id)
  {
    $order=Order::find($id);
$pdf=PDF::loadView('Admin.pdf',compact('order'));
return $pdf->download('view_order.pdf');
  }



}