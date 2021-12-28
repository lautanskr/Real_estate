<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $fillable = [
        'ward_no', 'mun_id'
    ];

    public function MWbelongTo(){
        return $this->belongsTo(Municipality::class, 'mun_id');
      }
}
