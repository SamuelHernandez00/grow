<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;
    protected $table = "ventas";
    //protected $primaryKey = "id";
    
    

    protected $fillable = [
    'id_user',
    'id_producto',
    'cantidad',
    'total',
    ];

    public function User(){
        return $this->belongsTo(User::class,'id_user');
    }
    public function productos(){
        return $this->belongsTo(productos::class,'id_producto');
    }
}
