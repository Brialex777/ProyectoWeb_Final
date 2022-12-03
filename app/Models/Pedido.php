<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['monto', 'direccion_envio', 'status'];

    public function productos(){
        return $this->belongsToMany(Producto::class);
    }

    public function clientes(){
        return $this->belongsTo(Cliente::class);
    }
}
