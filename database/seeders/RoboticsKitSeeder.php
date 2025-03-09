<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 🔴 Desactivar restricciones de clave foránea
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // 🗑️ Vaciar la tabla
        RoboticsKit::truncate();

        // 🔵 Reactivar restricciones de clave foránea
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $kits = [
            [
                'name' => 'StarterKit',
                'description' => 'Kit básico para iniciarse en robótica'
            ],
            [
                'name' => 'Educational Robotics Kit',
                'description' => 'Kit educativo completo para programación robótica'
            ],
            [
                'name' => 'Kit5',
                'description' => 'Kit avanzado con componentes especializados'
            ]
        ];

        foreach ($kits as $kit) {
            RoboticsKit::create($kit);
        }
    }
}