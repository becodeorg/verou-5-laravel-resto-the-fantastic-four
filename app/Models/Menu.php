<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

        protected $fillable = [
        'name', 
        'description',
        'price',
        'image',
        'gluten',
        'lactose',
        'nuts',
    ];

    use HasFactory;
}
