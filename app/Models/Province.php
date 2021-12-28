<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'country_id'
    ]; 

    public function districtProvince(){
        return $this->hasMany(District::class, 'province_id');
      }

      public function PCbelongTo(){
        return $this->belongsTo(Country::class, 'country_id');
      }
}
