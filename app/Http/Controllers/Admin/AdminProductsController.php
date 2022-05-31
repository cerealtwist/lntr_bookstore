<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminProductsController extends Controller
{
    //display semua produk
    public function index(){
        $products = Product::all();
        return view("admin.overview", ['products' =>$products]);
    }

    public function editProduct($id){
        $product = Product::find($id);
        return view('admin.editProduct', ['product'=>$product]);
    }

    public function updateProductImage(Request $request, $id){

        Validator::make($request->all(), ['image'=>"required|image|mimes:jpg,png,jpeg,jfif|max:5000"])->validate();

        if($request->hasFile("image")){

            $product = Product::find($id);
          $exists =  Storage::disk('local')->exists("public/product_images/".$product->image);

          //delete old image
          if($exists){
                Storage::delete('public/product_Images'.$product->image);
          }

        //upload new image
          $ext = $request->file(('image'))->getClientOriginalExtension(); //jpg

          $request->image->storeAs("public/product_images/",$product->image);

          $arrayToUpdate = array('image'=>$product->image);
          DB::table('products')->where('id', $id)->update(($arrayToUpdate));
        }else{
            $error = "No Image was Selected";
            return $error;
        }

    }
}
