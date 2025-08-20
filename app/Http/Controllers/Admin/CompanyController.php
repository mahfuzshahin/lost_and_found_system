<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Company;
use Auth;
class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:company.view')->only(['index','show']);
        $this->middleware('permission:company.create')->only(['create','store']);
        $this->middleware('permission:company.update')->only(['edit','update']);
        $this->middleware('permission:company.delete')->only(['destroy']);
    }
    // public function __construct()
    // {
    //     $actions = [
    //         'index'   => 'view',
    //         'show'    => 'view',
    //         'create'  => 'create',
    //         'store'   => 'create',
    //         'edit'    => 'update',
    //         'update'  => 'update',
    //         'destroy' => 'delete',
    //     ];

    //     foreach ($actions as $method => $action) {
    //         $this->middleware(function ($request, $next) use ($method, $action) {
    //             $model = $this->getModelName();
    //             $permission = strtolower($model) . '.' . $action;

    //             if (!auth()->user()->can($permission)) {
    //                 abort(403, 'Unauthorized');
    //             }

    //             return $next($request);
    //         })->only($method);
    //     }
    // }

    // protected function getModelName()
    // {
    //     return str_replace('Controller', '', class_basename($this));
    // }
    
    public function index()
    {
        $companies = Company::latest()->paginate(10);
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        Company::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'address'    => $request->address,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('companies.index')->with('success','Company created successfully.');
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        $company->update([
            'name'       => $request->name,
            'email'      => $request->email,
            'address'    => $request->address,
            'updated_by' => Auth::id(),
        ]);

        return redirect()->route('companies.index')->with('success','Company updated successfully.');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
