<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert([

    		['id' =>1, 'nombre' => 'Australia'],
			['id' =>2, 'nombre' => 'Austria'],
			['id' =>3, 'nombre' => 'Azerbaiyán'],
			['id' =>4, 'nombre' => 'Anguilla'],
			['id' =>5, 'nombre' => 'Argentina'],
			['id' =>6, 'nombre' => 'Armenia'],
			['id' =>7, 'nombre' => 'Bielorrusia'],
			['id' =>8, 'nombre' => 'Belice'],
			['id' =>9, 'nombre' => 'Bélgica'],
			['id' =>10, 'nombre' => 'Bermudas'],
			['id' =>11, 'nombre' => 'Bulgaria'],
			['id' =>12, 'nombre' => 'Brasil'],
			['id' =>13, 'nombre' => 'Reino Unido'],
			['id' =>14, 'nombre' => 'Hungría'],
			['id' =>15, 'nombre' => 'Vietnam'],
			['id' =>16, 'nombre' => 'Haiti'],
			['id' =>17, 'nombre' => 'Guadalupe'],
			['id' =>18, 'nombre' => 'Alemania'],
			['id' =>19, 'nombre' => 'Países Bajos => Holanda'],
			['id' =>20, 'nombre' => 'Grecia'],
			['id' =>21, 'nombre' => 'Georgia'],
			['id' =>22, 'nombre' => 'Dinamarca'],
			['id' =>23, 'nombre' => 'Egipto'],
			['id' =>24, 'nombre' => 'Israel'],
			['id' =>25, 'nombre' => 'India'],
			['id' =>26, 'nombre' => 'Irán'],
			['id' =>27, 'nombre' => 'Irlanda'],
			['id' =>28, 'nombre' => 'España'],
			['id' =>29, 'nombre' => 'Italia'],
			['id' =>30, 'nombre' => 'Kazajstán'],
			['id' =>31, 'nombre' => 'Camerún'],
			['id' =>32, 'nombre' => 'Canadá'],
			['id' =>33, 'nombre' => 'Chipre'],
			['id' =>34, 'nombre' => 'Kirguistán'],
			['id' =>35, 'nombre' => 'China'],
			['id' =>36, 'nombre' => 'Costa Rica'],
			['id' =>37, 'nombre' => 'Kuwait'],
			['id' =>38, 'nombre' => 'Letonia'],
			['id' =>39, 'nombre' => 'Libia'],
			['id' =>40, 'nombre' => 'Lituania'],
			['id' =>41, 'nombre' => 'Luxemburgo'],
			['id' =>42, 'nombre' => 'México'],
			['id' =>43, 'nombre' => 'Moldavia'],
			['id' =>44, 'nombre' => 'Mónaco'],
			['id' =>45, 'nombre' => 'Nueva Zelanda'],
			['id' =>46, 'nombre' => 'Noruega'],
			['id' =>47, 'nombre' => 'Polonia'],
			['id' =>48, 'nombre' => 'Portugal'],
			['id' =>49, 'nombre' => 'Reunión'],
			['id' =>50, 'nombre' => 'Rusia'],
			['id' =>51, 'nombre' => 'El Salvador'],
			['id' =>52, 'nombre' => 'Eslovaquia'],
			['id' =>53, 'nombre' => 'Eslovenia'],
			['id' =>54, 'nombre' => 'Surinam'],
			['id' =>55, 'nombre' => 'Estados Unidos'],
			['id' =>56, 'nombre' => 'Tadjikistan'],
			['id' =>57, 'nombre' => 'Turkmenistan'],
			['id' =>58, 'nombre' => 'Islas Turcas y Caicos'],
			['id' =>59, 'nombre' => 'Turquía'],
			['id' =>60, 'nombre' => 'Uganda'],
			['id' =>61, 'nombre' => 'Uzbekistán'],
			['id' =>62, 'nombre' => 'Ucrania'],
            ['id' =>63, 'nombre' => 'Finlandia']
        ]);
    }
}
