<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\License;
use Illuminate\Support\Str;
class LicenseController extends Controller
{
    public function index()
    {
        $licenses = License::orderBy('created_at', 'desc')->get();
        return view('licenses.index', compact('licenses'));
    }

    // Show form to generate licenses
    public function create()
    {
        return view('licenses.create');
    }

    // Store generated licenses
    public function store(Request $request)
    {
        $request->validate([
            'count' => 'required|integer|min:1|max:1000',
        ]);

        $licenses = [];
        for ($i = 0; $i < $request->count; $i++) {
            $key = strtoupper(Str::random(16)); // Example: ABCD1234EFGH5678
            $licenses[] = License::create([
                'license_key' => $key,
                'used' => false,
            ]);
        }

        return redirect()->route('licenses.index')->with('success', $request->count.' license(s) generated successfully!');
    }

    // Export licenses to CSV
    public function export()
    {
        $licenses = License::all();

        $filename = 'licenses_'.date('Ymd_His').'.csv';
        $handle = fopen($filename, 'w+');
        fputcsv($handle, ['ID', 'License Key', 'Used', 'Domain', 'Created At']);

        foreach ($licenses as $license) {
            fputcsv($handle, [
                $license->id,
                $license->license_key,
                $license->used ? 'Yes' : 'No',
                $license->domain ?? '-',
                $license->created_at,
            ]);
        }

        fclose($handle);

        return response()->download($filename)->deleteFileAfterSend(true);
    }
}
