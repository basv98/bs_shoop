<?php

namespace App\shop;

use App\Models\Product as ModelsProduct;

class Product
{
    private $product;

    public function __construct($product_id = "")
    {
        if ($product_id) {
            $this->product = ModelsProduct::find($product_id);
        }
    }

    public function get()
    {
        return $this->product;
    }

    public function decreaseStock($quantity)
    {
        $stock = $this->product->stock - $quantity;
        $this->product->update(['stock' => $stock]);
    }

    public function hasStock($quantity)
    {
        return $this->product->stock >= $quantity;
    }

    public function all()
    {
        $products = ModelsProduct::all();
        $products_array = [];
        foreach ($products as $product) {
            $this->product = $product;
            array_push($products_array, ["avg" => $this->avg(), "product" => $product]);
        }
        return $products_array;
    }

    public function avg()
    {
        $comments = $this->product->comments;
        $avg = 0;
        $cont = 0;
        $sum = 0;
        foreach ($comments as $comment) {
            $sum += $comment->punctuation;
            $cont++;
            $avg = $sum / $cont;
        }
        return (int)round($avg);
    }
}
