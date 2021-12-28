<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'sortname', 'phonecode'
    ]; 

    
    public function countryProvince(){
        return $this->hasMany(Province::class, 'country_id');
      }
}
