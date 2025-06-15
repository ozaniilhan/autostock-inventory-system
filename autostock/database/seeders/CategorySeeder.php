<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Elektronik', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kırtasiye', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Yedek Parça', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}