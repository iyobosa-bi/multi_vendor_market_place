<?php

namespace Database\Seeders\Admin;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        Admin::create([
            'name'     => 'TheSuperAdmin',
            'email'    => 'superadmin@gmail.com',
            'password' => 'password123',   // Model will auto-hash this
            'role'     => 'super-admin',
            'is_active' => true,
        ]);
    }



}
