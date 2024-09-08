<?php

namespace Database\Seeders;

use App\Models\PostAds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostAds::factory()->count(10)->create();

    }
}
