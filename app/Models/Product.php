<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'type'
    ];


    public function getPriceAttribute($val) {
        $Rupiah = "Rp. ".$val;
        return $Rupiah;
    }
}
