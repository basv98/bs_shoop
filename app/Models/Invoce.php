<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Invoce extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'cantidad_producto', 'mount', 'cedula_cliente', 'nombre_cliente', 'telefono_cliente', 'correo_cliente', 'direccion_cliente', 'envio_premiun', 'user_id', 'state_invoces'];

    public static function getInvoce($invoce_id)
    {
        return Invoce::where([
            ["state_invoces", Config::get('constant.factura.inicializada')],
            ["id", $invoce_id]
        ]);
    }
}
