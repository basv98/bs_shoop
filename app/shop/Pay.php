<?php

namespace App\shop;

use App\shop\Product;

class Pay
{
    private $invoice;
    public function __construct($invoce_id)
    {
        $this->invoice = new Invoice($invoce_id);
    }

    public function pay()
    {
        $data_factura = $this->invoice->get();
        
        if ($data_factura) {
            $cantidad_producto = $data_factura->cantidad_producto;
            $product_id = $data_factura->product_id;

            $product = new Product($product_id);

            if ($product->hasStock($cantidad_producto)) {
                $this->invoice->markPaid();
                $product->decreaseStock($cantidad_producto);
                return ["error" => 0, "msj" => "Ok"];
            } else {
                return ["error" => 1, "msj" => "Lo sentimos solo no tenemos disponibilidad"];
            }
        } else {
            return ["error" => 1, "msj" => "La factura ya ha sido pagada"];
        }
    }
}
