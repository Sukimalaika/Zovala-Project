<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $table = 'county';        
    use HasFactory;

    public function subcounties(){
        return $this->hasMany(SubCounty::class);
    }
    public function getNameAttribute($value){
        return ucwords($value);
    }
}
