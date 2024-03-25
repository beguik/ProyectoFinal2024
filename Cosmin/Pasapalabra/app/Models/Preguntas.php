<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;

    public function partidas()
    {
        return $this->belongsTo(Partidas::class);
    }

    public function categorias()
    {
        return $this->hasOne(Categorias::class);
    }
    
    protected $fillable = [
        'pregunta', 'respuesta', 'id_categoria'
    ];
}
