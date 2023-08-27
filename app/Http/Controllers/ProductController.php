<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class ProductController extends Controller
{
    public function view_product()

    {
        $data=Category::all();
        return view('Admin.add_product',compact('data'));
    }


    
    public function add_product(Request $request)
    {

      $product=new Product;
      $product->title=$request->title;
      $product->Description=$request->Description;
     
      $product->category=$request->category;
      $product->quantity=$request->quantity;
      $product->price=$request->price;
      $product->discount_price=$request->discount_price;

      $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('product',$imagename);
      $product->image=$imagename;

      $product->save();
    
      return redirect('show_product')->with('smsproduct','Product Added Successfully');
      
     
    //   return redirect('/cate_table')->with('message','Category Added SuccessFully'  );
    }

   
    public function show_product()

    {
        $proshow=Product::all();
        // return view('Admin.show_product');
                return view('Admin.show_product ',compact('proshow'));
    }

    public function delete_product($id)

    {
     $product=product::find($id);
     $product->delete();
     return redirect()->back()->with('deletemsg','Delete Product Successfully');
    }
   


      public function update_product($id){

            $product = Product::find($id);
            $data=Category::all();
            return View('Admin.update_product')->with(compact('product','data'));
         // return redirect('edit_page');
        
         
         // return view('edit_page',campact('$Cust'));
        }



        public function update_product_confirm (Request $request,$id)
        {
$product= Product::find($id);
$product->title=$request->title;
$product->Description=$request->Description;

$product->category=$request->category;
$product->quantity=$request->quantity;
$product->price=$request->price;
$product->discount_price=$request->discount_price;
// image code here
$image=$request->image;

if($image)
{
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('product',$imagename);
    $product->image=$imagename;
}
// image code end
  
    //   return redirect('/cate_table')->with('message','Category Added SuccessFully'  );
return redirect('show_product')->with('updatesms','Product Upadte Successfully');

        }


}
