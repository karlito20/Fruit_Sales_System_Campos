<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    protected $table = 'fruits';
    protected $fillable = [
        'name',
        'price',
        'price',
        'stock_quantity',
        'description',
        'availability'
    ];
}
