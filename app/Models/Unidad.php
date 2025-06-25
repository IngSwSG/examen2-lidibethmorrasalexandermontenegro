<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
use App\Models\Presupuesto;
use App\Models\MaterialUnidad;

class Unidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    public function usuarios()
    {
        //return $this->hasMany(Usuario::class, 'unidad_id');
    }

    public function presupuestos()
    {
        //return $this->hasMany(Presupuesto::class, 'unidad_id');
    }

    public function unidadesMaterial()
    {
        //return $this->hasMany(MaterialUnidad::class, 'unidad_id');
    }
}
