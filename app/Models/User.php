<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth;

class User extends Model
{
    use HasFactory;
    protected $table = "users";
    //protected $primaryKey = "id";
    
    

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'fn',
        'foto',
        'terminos'
    ];

    public function setPasswordAttribute($pass){

        $this->attributes['password'] = bcrypt($pass);
    }

    public function ventas(){
        return $this->hasMany(ventas::class,'id');
    }


   
}
