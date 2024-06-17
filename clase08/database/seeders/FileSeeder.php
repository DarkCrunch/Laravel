<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        File::create([
            'name' => 'First file',
            'path' => 'c:/dd/dd/dd',
            'user_id' => 1
        ]);
        File::create([
            'name' => 'Second file',
            'path' => 'c:/dd/dd/dd',
            'user_id' => 1
        ]);
        File::create([
            'name' => 'Third file',
            'path' => 'c:/dd/dd/dd',
            'user_id' => 1
        ]);
    }
}
