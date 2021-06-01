<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = ["url", "product_id"];
    use HasFactory;

    public function getGetImageAttribute()
    {
        if ($this->url) {
            return url("storage/$this->url");
        } else {
            return "app/caja1.png";
        }
    }
}
