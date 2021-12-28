<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleProperty extends Model
{
    use HasFactory;
    protected $fillable=[
        'property_type', 'property_category', 'price', 'description', 'image','for_sale_id'
    ];
}
