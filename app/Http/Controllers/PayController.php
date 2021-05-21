<?php

namespace App\Http\Controllers;

use App\Http\Requests\PayRequest;
use App\Models\Invoce;
use App\shop\Pay;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index(Request $request)
    {
        $factura = Invoce::find($request->id);
        return view("pay", [
            'mount' => $factura->mount
        ]);
    }

    public function pay(PayRequest $request)
    {
        $pay = new Pay($request->invoce_id);
        $response = $pay->pay();
        return $response['error'] == 0 ? redirect()->route('finished') : back()->with(["response" => $response['msj']]);
    }
}
