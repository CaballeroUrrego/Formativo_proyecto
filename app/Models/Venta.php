<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    // Especificar la tabla si el nombre no es el plural del modelo
    protected $table = 'ventas';

    // Clave primaria personalizada
    protected $primaryKey = 'id_venta';

    // Campos asignables masivamente
    protected $fillable = [
        'id_usuario',
        'fecha_venta',
        'total',
    ];

    // Relación con el usuario (User)
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
    }

    // Relación con detalles de venta (DetalleVenta)
    public function detalles()
    {
        return $this->hasMany(DetalleVenta::class, 'id_venta', 'id_venta');
    }
}
