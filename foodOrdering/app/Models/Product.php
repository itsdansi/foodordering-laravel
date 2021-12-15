<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 'product_desc', 'price', 
    // 'category_id'
];
    protected $attributes = [
    
        'product_image' => '',
    // 'category_id' => '1',
    ];
}
