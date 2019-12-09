<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Session;
use Cart;


class CartController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	return view("cart");
    }
    public function store(Request $request, $item)
    {
        //
    $menu = Menu::find($item);
   
       $cartItem =  Cart::add([
            'id'    => $menu->id,
            'name'  => $menu->name,
            'qty'   => 1,
            'price' =>$menu->price
        ]);
       Cart::associate($cartItem->rowId, 'App\Menu');  // Display an image to cart Page
    Session::flash('status', 'Product added to cart');
       return redirect('/cart');
    }

     public function update(Request $request, $id)
    {
        //
        //dd($qty);
      dd($id);
     // dd($id);
         //break;
         //$r = Cart::update($id, $request->qty);
         
        Session::flash('status', 'Product quantity updated');
        return redirect()->back();

    }

     public function destroy($id)
    {
        //
         Cart::remove($id);
        Session::flash('status', 'Product removed from cart');
        return redirect()->back();
    }
}
