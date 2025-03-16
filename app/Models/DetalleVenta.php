<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    // Especificar la tabla si el nombre no sigue la convención de Laravel
    protected $table = 'detalle_ventas';

    // Clave primaria personalizada
    protected $primaryKey = 'id_detalle_venta';

    // Campos asignables masivamente
    protected $fillable = [
        'id_venta',
        'id_producto',
        'cantidad',
        'precio',
    ];

    // Relación con la venta (Venta)
    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_venta', 'id_venta');
    }

    // Relación con el producto (Producto)
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto', 'id_producto');
    }
}
