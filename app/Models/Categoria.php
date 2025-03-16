<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla si no sigue la convención
    protected $table = 'categorias';

    // Clave primaria personalizada
    protected $primaryKey = 'id_categoria';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
    ];
}
