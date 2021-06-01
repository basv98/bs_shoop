<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\shop\Product as ShopProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(ShopProduct $product)
    {
        return view('index', [
            "products" => $product->all()
        ]);
    }
}
