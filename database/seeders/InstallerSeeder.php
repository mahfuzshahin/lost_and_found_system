<?php
// database/seeders/InstallerSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class InstallerSeeder extends Seeder
{
    public function run()
    {
        $resources = ['company', 'user', 'role', 'permission'];
        $actions   = ['view','create','update','delete'];

        foreach ($resources as $res) {
            foreach ($actions as $act) {
                Permission::firstOrCreate(['name' => "$res.$act", 'guard_name' => 'web']);
            }
        }

        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $userRole  = Role::firstOrCreate(['name' => 'user',  'guard_name' => 'web']);

        $adminRole->syncPermissions(Permission::where('guard_name','web')->get());
        $userRole->syncPermissions(['company.view']);

        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin', 'password' => Hash::make('password')]
        );
        $admin->syncRoles(['admin']);
    }
}
