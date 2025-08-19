<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Artisan;
class InstallController extends Controller
{

    public function showForm()
    {
        return view('install.form');
    }

    public function runInstall(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'admin_name'   => 'required|string|max:255',
            'admin_email'  => 'required|email',
            'admin_password' => 'required|string|min:6',
        ]);

        try {
            // 1. Fresh migrate
            Artisan::call('migrate:fresh', ['--force' => true]);

            // 2. Seed roles and permissions
            Artisan::call('db:seed', ['--force' => true]);

            // 3. Create company and admin user
            $company = \App\Models\Company::create([
                'name' => $request->company_name,
            ]);

            $admin = \App\Models\User::create([
                'name' => $request->admin_name,
                'email' => $request->admin_email,
                'password' => bcrypt($request->admin_password),
            ]);

            $admin->assignRole('admin');

            return redirect()->route('login')->with('success', 'System installed successfully!');

        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function indexTest()
    {
        try {
            // Run migrations
            Artisan::call('migrate:fresh', ['--seed' => true]);
            
            // Optional: create default roles/permissions
            Artisan::call('db:seed', ['--class' => 'PermissionSeeder']);
            Artisan::call('db:seed', ['--class' => 'RoleSeeder']);
            
            // Optional: clear cache
            Artisan::call('optimize:clear');

            return "✅ Installation completed successfully!";
        } catch (\Exception $e) {
            return "❌ Error: " . $e->getMessage();
        }
    }
}
