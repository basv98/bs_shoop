<?php

namespace App\Http\Controllers;

use App\Models\{Comment, Product};
use Illuminate\Http\Request;

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
}
