<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ["stock"];

    public function imagenes()
    {
        return $this->hasMany(Image::class, "product_id", "id");
    }

    public static function stock(int $product_id)
    {
        return self::find($product_id)->stock;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, "product_id", "id");
    }
    
}
