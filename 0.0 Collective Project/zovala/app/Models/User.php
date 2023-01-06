<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    //properties
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = ['surname','other_names','username','gender','phone','email','password','otp','role_id','town_id'];

    //belongsTo
    public function role (){
        return $this->belongsTo(Role::class);
    }
}
