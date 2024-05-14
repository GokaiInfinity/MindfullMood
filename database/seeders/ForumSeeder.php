<?php

namespace Database\Seeders;

use App\Models\forum;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        forum::factory(10)->create();
    }
}
