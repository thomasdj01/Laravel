<?php

namespace Database\Seeders;

use Database\Factories\RollercoasterFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RollercoasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = RollercoasterFactory::new()->count(20)->create();
        
    }
}
