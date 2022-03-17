<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Se llama o referencia a nuestro seeder CursoSeeder
        // ===>>>
        // $this->call(CursoSeeder::class);

        // \App\Models\User::factory(10)->create();
        // // Instancio el objeto
        // $curso = new Curso();
        // // Establesco las propiedades o los valores del objeto
        // $curso->name = "Laravel";
        // $curso->description = "El mejor framework de PHP";
        // $curso->categoria = "Desarrollo web";
        // // Comando para guardar el registro
        // $curso->save();
        // Este codigo se movio al archivo CursoSeeder en la carpeta seeders

        // DIRECTAMENTE LLAMAMOS UNA FACTORY
        Curso::factory(50)->create();
        

    }
}
