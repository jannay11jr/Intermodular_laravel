<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->hasOne(Usuario::class);
    }
    public function centros(){
        return $this->belongsToMany(Centro::class,'notas');
    }
    public function solicitudes(){
        return $this->hasMany(Solicitud::class);
    }
}

