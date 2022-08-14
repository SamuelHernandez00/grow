<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "servicios";
    //protected $primaryKey = "id";
    
    

    protected $fillable = [
        'nombre',
        'tipo_servicio',
        'descripcion',
        'Imagen',
        'costo',
    ];
}
