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
    'id_organizacion',
    'nombre',
    'duracion',
    'descripcion',
    'estado',
    'supervision',
    'Fecha_inicio',
    'Fecha_culminacion',
    'Costo_Final',
    ];

    public function User(){
        return $this->belongsTo(User::class,'id_user');
    }
    public function organizaciones(){
        return $this->belongsTo(organizaciones::class,'id_organizaciones');
    }
}
