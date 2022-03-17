<?php

namespace Database\Seeders;

use App\Models\Curso;

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ALMACENAR DATOS DIRECTAMENTE UTILIZANDO EL ARCHIVO SEEDER
        // ==>>>>
        //   // Instancio el objeto
        //   $curso = new Curso();
        //   // Establesco las propiedades o los valores del objeto
        //   $curso->name = "Laravel";
        //   $curso->description = "El mejor framework de PHP";
        //   $curso->categoria = "Desarrollo web";
        //   // Comando para guardar el registro
        //   $curso->save();  // Instancio el objeto
        //   $curso2 = new Curso();
        //   // Establesco las propiedades o los valores del objeto
        //   $curso2->name = "Laravel";
        //   $curso2->description = "El mejor framework de PHP";
        //   $curso2->categoria = "Desarrollo web";
        //   // Comando para guardar el registro
        //   $curso2->save();  // Instancio el objeto
        //   $curso3 = new Curso();
        //   // Establesco las propiedades o los valores del objeto
        //   $curso3->name = "Laravel";
        //   $curso3->description = "El mejor framework de PHP";
        //   $curso3->categoria = "Desarrollo web";
        //   // Comando para guardar el registro
        //   $curso3->save();

        // LLENAR TABLAS CON DATOS ALEATORIOS UTILIZANDO UNA FACTORY
        // ===>>>>
        Curso::factory(50)->create();
        // ES MAS RECOMENDABLE HACERLO DESDE EL ARCHIVO DATABASEEEDER
    }
}
