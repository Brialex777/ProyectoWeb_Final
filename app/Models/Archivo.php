<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['nombre', 'descripcion', 'cantidad', 'precio'];

    public function productos(){
        return $this->belongsTo(Producto::class);
    }
}
