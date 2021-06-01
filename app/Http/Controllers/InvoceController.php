<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoceRequest;
use App\Models\{Invoce, Product};

class InvoceController extends Controller
{
    public function createInvoce(InvoceRequest $request)
    {
        $datos = $request->validated();
        $id_product = $datos['product_id'];

        $product = Product::find($id_product);
        $mount = $product->price * $datos['cantidad_producto'];

        $invoce = Invoce::create(
            [
                "user_id" => Auth()->user()->id,
                "mount" => $mount
            ] + $datos
        );
        return redirect()->route('payProduct', ['id' => $invoce->id]);
    }
}
