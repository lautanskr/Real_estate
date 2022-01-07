<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{
    use HasFactory;
    protected $fillable=[
        'name', 'pro_type_id'
    ];

      public function PCRelation(){
        return $this->belongsTo(PropertyType::class, 'pro_type_id');
}

      public function SaleCat(){
        return $this->hasMany(SaleProperty::class, 'pro_cat_id');
      }
}
