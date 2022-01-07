<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredAgent extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','email','password','mobile','country','province','district','mun_id','ward','image','status'

    ];
    public function AMRelation(){
        return $this->belongsTo(Municipality::class, 'mun_id');
}
}
