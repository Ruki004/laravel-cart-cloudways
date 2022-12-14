<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('cart.cart');
    }
    public function addToCart($id)
    {
        $product =Product::findOrFail($id);
        $cartItems =session()->get('cartItems',[]);
        if (isset($cartItems[$id])) { //if item added to the cart
         $cartItems[$id]['quantity']++;
        }else //if the item is not added to the cart
        {
            $cartItems[$id]=[
                "image_path"=>$product->image_path,
                "name"=>$product->name,
                "brand"=>$product->brand,
                "details"=>$product->details,
                "price"=>$product->price,
                "quantity"=>1

            ];
        }
        session()->put('cartItems',$cartItems);  //put the item in the session
        return redirect()->back()->with('success','Product sucessfully added to cart');


    }
    public function delete(Request $request)
    {
        if($request->id){
            $cartItems =session()->get('cartItems');
            if(isset($cartItems[$request->id])){
                unset($cartItems[$request->id]); //delete items
                session()->put('cartItems',$cartItems);

            }
            return redirect()->back()->with('Success','Product deleted successfully');
        }
    }
}
