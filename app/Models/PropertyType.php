<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
    ];
    public function propertyCategory(){
        return $this->hasMany(PropertyCategory::class, 'pro_type_id');
      }
}
