<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImportDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::unprepared(file_get_contents(database_path('seeds/dalle_helper.sql')));
    }
}
