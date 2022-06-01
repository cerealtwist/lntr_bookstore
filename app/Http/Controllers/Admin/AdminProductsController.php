<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminProductsController extends Controller
{
    //display semua produk
    public function index(){
        $products = Product::all();
        return view("admin.overview", ['products' =>$products]);
    }

    public function createProduct(){
        return view("admin.createProduct");
    }

    //kirim ke database
    public function sendCreateProduct(Request $request){

        $name = $request->input('name');
        $description = $request->input('description');
        $type = $request->input('type');
        $price = $request->input('price');

        Validator::make($request->all(), ['image'=>"required|file|image|mimes:jpg,png,jpeg,jfif|max:5000"])->validate();
        $ext = $request->file(('image'))->getClientOriginalExtension(); //jpg
        $stringImageReFormat = str_replace(" ","",$request->input('name'));

        $imageName = $stringImageReFormat.".".$ext; //

        $imageEncoded = File::get($request->image);
        Storage::disk('local')->put('public/product_images/'.$imageName, $imageEncoded);

        $newProductArray = array("name"=>$name, "description"=> $description,"image"=>$imageName, "type"=>$type, "price"=>$price);
        $created = DB::table("products")->insert($newProductArray);

        if($created){
            return redirect()->route("adminOverview");
        }else{
            return "Buku gagal ditambahkan";
        }
        
    }

    //edit product
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

          $updateArray = array('image'=>$product->image);

          DB::table('products')->where('id', $id)->update(($updateArray));

          return redirect()->route("adminOverview");
        }else{
            $error = "No Image was Selected";
            return $error;
        }

    }
    public function updateProduct(Request $request, $id){
        $name = $request->input('name');
        $description = $request->input('description');
        $type = $request->input('type');
        $price = $request->input('price');

        $updateArray = array("name"=>$name, "description"=>$description, "type"=>$type, "price"=>$price);

        DB::table('products')->where('id', $id)->update(($updateArray));

        return redirect()->route("adminOverview");
        
    }

    public function deleteProduct($id){
        $product = Product::find($id);

        $exists =  Storage::disk('local')->exists("public/product_images/".$product->image);

        //delete old image
        if($exists){
              Storage::delete('public/product_images'.$product->image);
        }

        Product::destroy($id);

        return redirect()->route("adminOverview");
    }
}
