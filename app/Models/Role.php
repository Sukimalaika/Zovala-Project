<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    //properties
    protected $table = "roles";
    protected $primaryKey = "id";
    protected $fillable = ['name'];

    //relationships (Many) //admin
    public function users(){
        
            return $this->hasMany(User::class);
        }
    
}
