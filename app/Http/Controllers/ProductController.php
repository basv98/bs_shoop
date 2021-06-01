<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Models\{Category, Image, Product};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{
    public function view(Request $request)
    {
        $product_id = $request->id;
        $product = Product::find($product_id);
        return view("product", [
            "product" => $product
        ]);
    }

    public function finishPurchase()
    {
        return view("finish");
    }

    public function viewNewProduct()
    {
        $categories = Category::all();
        return view("newProduct", compact("categories"));
    }

    public function addProduct(AddProductRequest $request)
    {
        $product_image = $request->file("image_product");

        $product = Product::create([
            "user_id" => Auth()->user()->id
        ] + $request->validated());

        $url_imagen = $product_image->store("img", "public");
        Image::create([
            "url" => $url_imagen,
            "product_id" => $product->id
        ]);

        return redirect()->route("home");
    }
}
