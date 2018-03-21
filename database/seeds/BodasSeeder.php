<?php

use Illuminate\Database\Seeder;

class BodasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bodas')->insert([
            'nombre_boda' => 'boda 1',
            'descripcion_boda' => 'descripcion boda 1',
            'fecha_boda' => time(),
        ]);
        DB::table('bodas')->insert([
            'nombre_boda' => 'boda 2',
            'descripcion_boda' => 'descripcion boda 2',
            'fecha_boda' => time(),
        ]);
        DB::table('bodas')->insert([
            'nombre_boda' => 'boda 3',
            'descripcion_boda' => 'descripcion boda 3',
            'fecha_boda' => time(),
        ]);
        DB::table('bodas')->insert([
            'nombre_boda' => 'boda 4',
            'descripcion_boda' => 'descripcion boda 4',
            'fecha_boda' => time(),
        ]);
        DB::table('relacion_usuarios_bodas')->insert([
            'id_boda' => 1,
            'id_usuario' => 1,
            'cargo' => 'administrador',
        ]);
        DB::table('relacion_usuarios_bodas')->insert([
            'id_boda' => 2,
            'id_usuario' => 1,
            'cargo' => 'administrador',
        ]);
        DB::table('relacion_usuarios_bodas')->insert([
            'id_boda' => 3,
            'id_usuario' => 1,
            'cargo' => 'administrador',
        ]);
        DB::table('relacion_usuarios_bodas')->insert([
            'id_boda' => 4,
            'id_usuario' => 1,
            'cargo' => 'administrador',
        ]);

    }
}
