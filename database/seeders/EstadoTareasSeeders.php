<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EstadoTareas;

class EstadoTareasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados =
        [
            'PENDIENTE',
            'PROGRESO',
            'COMPLETADO',
            'ELIMINADO'
        ];

        foreach($estados as $estado)
        {
            EstadoTareas::create(['nombre'=>$estado]);
        }







    }
}
