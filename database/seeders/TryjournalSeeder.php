<?php

namespace Database\Seeders;

use App\Models\tryjournal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TryjournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tryjournal::factory(10)->create();
    }
}
