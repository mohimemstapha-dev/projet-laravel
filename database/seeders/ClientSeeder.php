<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClientSeeder extends Seeder
{
   
    public function run(): void
    {
        Client::factory()
        ->count(30)
        ->create();
        DB::table('clients')->insert([
            'nom' => "Alamari",
            'prenom' => "Malak",
            'age' => 21,
            'solde'=>1200,
            'agence_id'=>2
        ]);
}
}
