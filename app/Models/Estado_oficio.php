<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_oficio extends Model
{
    use HasFactory;
    protected $table='estado_oficios';
    protected $primayKey = 'id';
    public $timestamps = false;
}
