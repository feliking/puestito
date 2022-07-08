<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Param;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Param::create([
            'key' => 'name_store',
            'value' => 'Nombre de la tienda'
        ]);
        Param::create([
            'key' => 'logo_store',
            'value' => 'path'
        ]);
    }
}
