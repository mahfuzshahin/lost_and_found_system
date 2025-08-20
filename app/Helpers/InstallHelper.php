<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class InstallHelper
{
    public static function isInstalled()
    {
        try {
            // ✅ Check if DB connection works and migrations are done
            if (!Schema::hasTable('users')) {
                return false; // Not installed yet
            }

            // ✅ You can also check if at least 1 user exists
            return DB::table('users')->exists();

        } catch (\Exception $e) {
            return false; // If DB not ready, return false
        }
    }
}
