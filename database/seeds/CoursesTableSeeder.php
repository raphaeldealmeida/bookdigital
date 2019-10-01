<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'Arquitetura e Urbanismo',
            'modality' => 'Presencial',
            'area_id'   => 1,
        ]);
        DB::table('courses')->insert([
            'name' => 'Design',
            'modality' => 'EAD',
            'area_id'   => 1,
        ]);
        DB::table('courses')->insert([
            'name' => 'Tecnologia em Design Gráfico',
            'modality' => 'Presencial',
            'area_id'   => 1,
        ]);
        DB::table('courses')->insert([
            'name' => 'Direito',
            'modality' => 'Presencial',
            'area_id'   => 2,
        ]);
        DB::table('courses')->insert([
            'name' => 'Tecnologia em Gestão de Serviços Jurídicos',
            'modality' => 'EAD',
            'area_id'   => 2,
        ]);
        DB::table('courses')->insert([
            'name' => 'Publicidade e Propaganda',
            'modality' => 'Presencial',
            'area_id'   => 3,
        ]);
        DB::table('courses')->insert([
            'name' => 'Jornalismo',
            'modality' => 'Presencial',
            'area_id'   => 3,
        ]);
        DB::table('courses')->insert([
            'name' => 'Turismo',
            'modality' => 'Presencial',
            'area_id'   => 3,
        ]);
        DB::table('courses')->insert([
            'name' => 'Sistemas de Informação',
            'modality' => 'Presencial',
            'area_id'   => 3,
        ]);
    }
}
