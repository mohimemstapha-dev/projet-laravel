<?php

namespace Database\Seeders;

use App\Models\Virement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Virement::
            factory()
            ->count(30)
            ->create();
    }
}
