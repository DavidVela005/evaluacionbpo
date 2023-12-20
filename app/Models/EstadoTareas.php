<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoTareas extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table  = 'estado_tareas';
    protected $primarykey = 'id';
}
