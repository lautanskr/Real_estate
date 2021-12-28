<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;
    protected $fillable = [
        'm_name', 'district_id'
    ];

    public function wardMun(){
        return $this->hasMany(Ward::class, 'mun_id');
      }

      public function DMbelongTo(){
        return $this->belongsTo(District::class, 'district_id');
      }
}
