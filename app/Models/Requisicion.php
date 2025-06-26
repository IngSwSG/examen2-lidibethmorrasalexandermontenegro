<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemRequisicion;
use App\Models\Usuario;

class Requisicion extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'estado',
    ];

    public function items()
    {
        return $this->hasMany(ItemRequisicion::class, 'requisicion_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
