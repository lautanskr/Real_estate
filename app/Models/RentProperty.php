<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentProperty extends Model
{
    use HasFactory;
    protected $fillable=[
        'price', 'description', 'image','pro_cat_id','country','province','district','mun_id','ward','street','near_by'
   ];

    public function RPRelation(){
        return $this->belongsTo(PropertyCategory::class, 'pro_cat_id');
}

public function MRRelation(){
    return $this->belongsTo(Municipality::class, 'mun_id');
  }
}
