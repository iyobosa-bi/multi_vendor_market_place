<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'group_name' => 'Product Category',
                'name' => 'product-category-create',
            ],
            [
                'group_name' => 'Product Category',
                'name' => 'product-category-edit',
            ],
            [
                'group_name' => 'Product Category',
                'name' => 'product-category-delete',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission['name'], 'guard_name' => 'admin'],
                ['group_name' => $permission['group_name']]
            );
        }
    }
}
