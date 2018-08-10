<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Озера', 'Реки', 'Музеи', 'Кафе', 'Парки'];
        foreach ($names as $name) {
            DB::table('types')->insert(['name' => $name]);
        }
    }
}
