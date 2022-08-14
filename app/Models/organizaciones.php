<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organizaciones extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "organizaciones";
    //protected $primaryKey = "id";
    
    

    protected $fillable = [
        'id_usuario',
       'Logo',
        'Nombre',
       'Telefono',
        'Correo',
        'Calle',
       'No_Interior',
       'No_Exterior',
        'CodigoPostal',
        'Colonia',
        'Municipio',
        'Estado',
       'Giro',
       
    ];

    public function ventas(){
        return $this->hasMany(ventas::class,'id');
    }
}
