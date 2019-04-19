<?php
    use App\Models\Nivel;
    use Illuminate\Database\Seeder;

    class NivelesTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            Nivel::create([
                'id_nivel' => 1,
                'nombre' => 'Usuario',
            ]);
            Nivel::create([
                'id_nivel' => 2,
                'nombre' => 'Administrador',
            ]);
        }
    }