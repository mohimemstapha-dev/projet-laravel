<?php

namespace Database\Seeders;

use App\Models\Agence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AgenceSeeder;
use Database\Seeders\ClientSeeder;
use Database\Seeders\VirementSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
            $this->call([
            AgenceSeeder::class,
            ClientSeeder::class,
            VirementSeeder::class
            ]);

    }
}
