<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
    protected $table = 'centros';
    public function usuarios(){
        return $this->hasMany(Usuario::class);
    }
    public function ciclos(){
        return $this->belongsToMany(Ciclo::class,'pivot_centros_ciclos');
    }
    public function empresas(){
        return $this->belongsToMany(Empresa::class,'notas');
    }
}
