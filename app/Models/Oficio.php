<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficio extends Model{
    use HasFactory;
    protected $table='oficios';
    protected $primayKey = 'id';
    public $timestamps = false;
}
