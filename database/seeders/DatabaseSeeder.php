<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SecondArticle;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        SecondArticle::factory()->count(20)->create();
    }
}
