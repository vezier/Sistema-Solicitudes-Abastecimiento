<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model{
    use HasFactory;

    protected $table='establecimientos';
    protected $primayKey = 'id';
    public $timestamps = false;

    public function index()
{
    $datos = Establecimiento::all();
    return view('mi-vista', ['datos' => $datos]);
}

}
