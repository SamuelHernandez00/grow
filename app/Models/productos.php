<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    
    protected $table = "productos";
    //protected $primaryKey = "id";
    
    

    protected $fillable = [
        'nombre',
        'descripcion',
        'img',
        'precio',
    ];

   

    public function ventas(){
        return $this->hasMany(ventas::class,'id');
    }
}
