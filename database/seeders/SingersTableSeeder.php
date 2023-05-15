<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Singers;
use Illuminate\Database\Eloquent\Factories\Factory;

class SingersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Singers::factory()->count(50)->create();
    }
}
