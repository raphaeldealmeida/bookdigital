<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'name' => 'Engenharias e Arquitetura',
        ]);
        DB::table('areas')->insert([
            'name' => 'Direito',
        ]);
        DB::table('areas')->insert([
            'name' => 'Comunicação e Turismo',
        ]);
        DB::table('areas')->insert([
            'name' => 'Informática',
        ]);
    }
}
