<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    public function subcounty(){
        return $this->belongsTo(SubCounty::class,'sc_id','id');
    }
    public function getNameAttribute($value){
        return ucwords($value);
    }
}
