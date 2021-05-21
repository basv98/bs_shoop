<?php

namespace App\shop;

use App\Models\Product as ModelsProduct;

class Product
{
    private $product;

    public function __construct($product_id)
    {
        $this->product = ModelsProduct::find($product_id);
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
}
