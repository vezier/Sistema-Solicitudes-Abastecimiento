<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden_compra extends Model
{
    use HasFactory;
    
    protected $table='ordenes_compra';
    protected $primayKey = 'idoc';
    public $timestamps = false;

    function oficio() {
        return $this->belongsTo('Oficio', 'id');
    }
}
