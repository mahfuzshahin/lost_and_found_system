<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;
use App\Models\License;
use App\Models\User;
use App\Models\Company;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class InstallController extends Controller
{
    // public function showForm()
    // {
    //     // Run migrations first (creates all tables including licenses)
    //     Artisan::call('migrate', ['--force' => true]);

    //     // Now it's safe to check license
    //     if (Schema::hasTable('licenses') && License::where('used', true)->exists()) {
    //         return redirect('/')->with('error', 'System is already installed.');
    //     }

    //     return view('install.form');
    // }

    // public function runInstall(Request $request)
    // {
    //     $request->validate([
    //         'license_key' => 'required|string',
    //         'company_name' => 'required|string|max:255',
    //         'admin_name' => 'required|string|max:255',
    //         'admin_email' => 'required|email',
    //         'admin_password' => 'required|string|min:6',
    //     ]);

    //     // Make sure the licenses table exists
    //     if (!Schema::hasTable('licenses')) {
    //         Artisan::call('migrate', ['--force' => true]);
    //     }

    //     $license = License::where('license_key', $request->license_key)
    //                     ->where('used', false)
    //                     ->first();

    //     if (!$license) {
    //         return back()->withErrors(['License key is invalid or already used.']);
    //     }

    //     try {
    //         // Run migrations (normal, not fresh)
    //         Artisan::call('migrate', ['--force' => true]);

    //         // Seed roles & permissions
    //         Artisan::call('db:seed', ['--force' => true]);

    //         // Create Company
    //         $company = Company::create([
    //             'name' => $request->company_name,
    //         ]);

    //         // Create Admin User
    //         $admin = User::create([
    //             'name' => $request->admin_name,
    //             'email' => $request->admin_email,
    //             'password' => Hash::make($request->admin_password),
    //         ]);

    //         // Assign Admin Role
    //         $adminRole = Role::firstOrCreate(['name' => 'admin']);
    //         $admin->assignRole($adminRole);

    //         // Mark license as used & bind to server
    //         $license->update([
    //             'used' => true,
    //             'domain' => $_SERVER['SERVER_NAME'],
    //         ]);

    //         return redirect()->route('login')->with('success', 'System installed successfully!');

    //     } catch (\Exception $e) {
    //         // Show detailed error in debug mode
    //         if (config('app.debug')) {
    //             return back()->withErrors(['error' => $e->getMessage()]);
    //         }
    //         return back()->withErrors(['error' => 'Installation failed. Please check logs.']);
    //     }
    // }

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
            File::put(storage_path('installed.lock'), 'installed');

            return redirect()->route('login')->with('success', 'System installed successfully!');
            // File::put(storage_path('installed.lock'), 'installed');


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
