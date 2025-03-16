<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    // Especificar la tabla si el nombre no sigue la convención de Laravel
    protected $table = 'movimientos';

    // Clave primaria personalizada (opcional)
    protected $primaryKey = 'id_movimiento';

    // Campos asignables masivamente
    protected $fillable = [
        'tipo',
        'id_producto',
        'cantidad',
        'fecha_movimiento',
    ];

    // Relación con el producto (Producto)
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto', 'id_producto');
    }
}
