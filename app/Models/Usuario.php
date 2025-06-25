<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Requisicion;
use App\Models\Credencial;
use App\Models\Rol;
use App\Models\Unidad;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificacion',
        'nombre',
        'apellidos',
        'telefono',
    ];

    public function requisiciones()
    {
        //return $this->hasMany(Requisicion::class, 'usuario_id'); //NORVIN
    }

    public function credencial()
    {
        return $this->hasOne(Credencial::class, 'usuario_id');
    }

    public function roles()
    {
        return $this->hasMany(Rol::class, 'usuario_id');
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'unidad_id');
    }
}
