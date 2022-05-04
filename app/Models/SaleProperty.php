<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Municipality;

class SaleProperty extends Model
{
    use HasFactory;
    protected $table="sale_properties";
    protected $fillable=[
         'price', 'description', 'image','pro_cat_id','country','province','district','mun_id','ward','street','near_by'
    ];

    public function SPRelation(){
        return $this->belongsTo(PropertyCategory::class, 'pro_cat_id');
}

public function MPRelation(){
    return $this->belongsTo(Municipality::class, 'mun_id');
  }

  public function country1(){
    return $this->belongsTo(Country::class, 'country','id');
  }
  public function mun(){
    return $this->belongsTo(Municipality::class, 'mun_id','id');
  }
}
