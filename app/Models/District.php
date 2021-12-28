<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'province_id'
    ]; 
    public function muniDistrict(){
        return $this->hasMany(Municipality::class, 'district_id');
      }

      public function PDRelation(){
        return $this->belongsTo(Province::class, 'province_id');
        
      }
      
    
     
}
