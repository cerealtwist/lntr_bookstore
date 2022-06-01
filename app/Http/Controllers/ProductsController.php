<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Product;
use Illuminate\Cache\Console\ForgetCommand;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    //

    public function index(){
        /*$products = [0=> ["name"=>"Max Havelaar","category"=>"Novel","price"=>125000],
            1=> ["name"=>"Mohammad Hatta","category"=>"Biography","price"=>70000],
            2=> ["name"=>"The Bible","category"=>"Religi","price"=>80000]];*/

        $products = Product::paginate(4);

        return view("homepage", compact("products"));
    }

    public function showProductPage($id){

       $data = Product::find($id);
       return view('product_page',['product'=>$data]);
    }


    public function addProductToCart(Request $request, $id){

        // $request->session()->forget("cart");
        // $request->session()->flush();

        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);

        $product = Product::find($id);
        $cart->addItem($id, $product);
        $request->session()->put('cart', $cart);

        // dump($cart);
        return redirect()->route('homePage');

    }

    public function showCart(){

        $cart = Session::get('cart');

        if($cart){
            return view('cartproducts',['cartItems'=> $cart]);
        }else{
            return redirect()->route("homePage");
        }
    }


public function deleteCartItem(Request $request, $id){

    $cart = $request->session()->get("cart");

    if(array_key_exists($id, $cart->items)){
        unset($cart->items[$id]);

    }

    $prevCart = $request->session()->get("cart");
    $updatedCart = new Cart($prevCart);
    $updatedCart->updatePriceQuantity();

    $request->session()->put("cart", $updatedCart);

    return redirect()->route('cartproducts');


}

}
 