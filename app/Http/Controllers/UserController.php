<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $user->syncRoles($request->roles);
        return redirect()->route('users.index')->with('success', 'User roles updated.');
    }
}
