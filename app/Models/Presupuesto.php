<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MaterialUnidad;
use App\Models\Unidad;

class Presupuesto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigoPresupuesto',
        'nombrePresupuesto',
    ];

    public function unidadesMaterial()
    {
        return $this->hasMany(MaterialUnidad::class, 'presupuesto_id');
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'unidad_id');
    }
}
