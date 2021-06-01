<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ["product_name", "category_id", "price", "stock", "description", "user_id"];

    public function imagen()
    {
        return $this->belongsTo(Image::class, "id", "product_id");
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
