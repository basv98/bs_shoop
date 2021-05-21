<?php

namespace App\shop;

use App\Models\Invoce;
use Illuminate\Support\Facades\Config;

class Invoice
{
    private $invoice;

    public function __construct($invoice_id)
    {
        $this->invoice = Invoce::find($invoice_id);
    }

    public function get()
    {
        return $this->invoice;
    }

    public function markPaid()
    {
        return $this->invoice->update(['state_invoces' => Config::get('constant.factura.pagada')]);
    }
}
