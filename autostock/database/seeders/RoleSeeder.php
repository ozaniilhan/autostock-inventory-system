<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role; // ← bu satır eksikti

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['Admin', 'Depo Görevlisi', 'Satış Personeli'];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }
    }
}
