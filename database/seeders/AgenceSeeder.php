<?php

namespace Database\Seeders;

use App\Models\Agence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgenceSeeder extends Seeder
{
    public function run(): void
    {
         Agence::factory()
             ->create();

        Agence::factory()
                ->count(15)
                ->create();

        DB::table('agences')->insert([
            'nom'        => "Agence 1",
            'ville'      => "Kenitra",
            'adresse'    => "Hay Aman",
        ]);
    }
}






