<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    use HasFactory;

    protected $table = 'pagos';
    protected $fillable = ['id_jugador','preinscripcion','pago1','pago2','pago3','pago4','pago5','pago6','pago7','pago8','pago9','pago10','tipo'];
}
