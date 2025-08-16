<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission as SpatiePermission; // <--- alias it

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','role:admin']); // only admin can manage permissions
    }

    public function index()
    {
        $permissions = SpatiePermission::all();
        return view('permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name'
        ]);

        SpatiePermission::create(['name' => $request->name]);

        return redirect()->route('permissions.index')->with('success', 'Permission created successfully.');
    }

    public function edit(Permission $permission)
    {
        return view('permissions.edit', compact('permission'));
    }

    public function update(Request $request, SpatiePermission $permission)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,' . $permission->id
        ]);

        $permission->update(['name' => $request->name]);

        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully.');
    }

    public function destroy(SpatiePermission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully.');
    }
}
