<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;
use App\Models\Unidad;
use App\Models\Presupuesto;

class MaterialUnidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'idUnidad',
    ];

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'unidad_id');
    }

    public function presupuesto()
    {
        return $this->belongsTo(Presupuesto::class, 'presupuesto_id');
    }
}
