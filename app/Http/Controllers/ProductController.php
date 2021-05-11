<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view(Request $request)
    {
        $product = Product::find($request->id);
        return view("product", [
            "product" => $product
        ]);
    }

    public function pay(Request $request)
    {
        $factura = Product::find($request->id);
        return view("pay");
    }
}
