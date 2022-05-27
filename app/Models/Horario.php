<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $table = 'horarios';
    protected $fillable = ['id_club','dia','franja','hora_inicio','hora_fin','tipo', 'campo1','campo2','campo3','campo4'];
}
