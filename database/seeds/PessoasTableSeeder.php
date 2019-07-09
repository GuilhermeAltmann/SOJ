<?php

use Illuminate\Database\Seeder;
use App\Models\Pessoa;

class PessoasTableSeeder extends Seeder
{
    public function run()
    {
        $pessoas = factory(Pessoa::class)->times(50)->make()->each(function ($pessoa, $index) {
            if ($index == 0) {
                // $pessoa->field = 'value';
            }
        });

        Pessoa::insert($pessoas->toArray());
    }

}

