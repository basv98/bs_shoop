<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;

    public function imagenes()
    {
        return $this->hasMany(Image::class, "product_id", "id");
    }
}
