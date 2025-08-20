<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create permissions
        $permissions = ['company.view', 'company.create', 'company.update', 'company.delete'];

        // 2️⃣ Create permissions explicitly with guard_name
        foreach ($permissions as $permName) {
            Permission::updateOrCreate(
                ['name' => $permName],
                ['guard_name' => 'web']
            );
        }

        // 3️⃣ Create admin role with guard_name
        $adminRole = Role::updateOrCreate(
            ['name' => 'admin'],
            ['guard_name' => 'web']
        );

        // 4️⃣ Sync all permissions to admin role
        $adminRole->syncPermissions(Permission::where('guard_name', 'web')->get());

        // 5️⃣ Create user role
        $userRole = Role::updateOrCreate(
            ['name' => 'user'],
            ['guard_name' => 'web']
        );

        // 6️⃣ Give only view permission to user
        $userRole->syncPermissions(['company.view']);
    }
}
