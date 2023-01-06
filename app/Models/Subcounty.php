<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcounty extends Model
{
    protected $table = "subcounty";
    use HasFactory;

    //relationships
    public function County(){
        return $this->belongsTo(County::class);
    }

    public function towns(){
        return $this ->hasMany(Town::class);
    }

    public function getNameAttribute($value){
        return ucwords($value);
    }
}
