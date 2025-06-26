<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Requisicion;
use App\Models\Material;

class ItemRequisicion extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'cantidadAprobada',
    ];

    public function requisicion()
    {
        return $this->belongsTo(Requisicion::class, 'requisicion_id'); //Norvin
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }
}
