<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nombre_cliente" => ["required", "alpha"],
            "cedula_cliente" => ["required", "numeric"],
            "telefono_cliente" => ["required", "numeric"],
            "correo_cliente" => ["required", "email"],
            "direccion_cliente" => ["required"],
            "cantidad_producto" => ["required", "numeric"],
            "product_id" => ["required", "numeric"]
        ];
    }
}
