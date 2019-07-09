<?php

use Illuminate\Database\Seeder;
use App\Models\Audiencia;

class AudienciasTableSeeder extends Seeder
{
    public function run()
    {
        $audiencias = factory(Audiencia::class)->times(50)->make()->each(function ($audiencia, $index) {
            if ($index == 0) {
                // $audiencia->field = 'value';
            }
        });

        Audiencia::insert($audiencias->toArray());
    }

}

