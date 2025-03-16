<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla si no sigue la convención
    protected $table = 'roles';

    // Clave primaria personalizada
    protected $primaryKey = 'id_rol';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
    ];

    // Relación con el modelo User
    public function users()
    {
        return $this->hasMany(User::class, 'id_rol', 'id_rol');
    }
}
