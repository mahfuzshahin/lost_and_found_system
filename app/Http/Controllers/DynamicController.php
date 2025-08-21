<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DynamicController extends Controller
{
    public function __construct()
    {
        $actions = [
            'index'   => 'view',
            'show'    => 'view',
            'create'  => 'create',
            'store'   => 'create',
            'edit'    => 'update',
            'update'  => 'update',
            'destroy' => 'delete',
        ];

        foreach ($actions as $method => $action) {
            $this->middleware(function ($request, $next) use ($method, $action) {
                $currentMethod = $request->route()->getActionMethod();
                if ($currentMethod === $method) {
                    $model = $this->getModelName();
                    $permission = strtolower($model) . '.' . $action;

                    if (!auth()->user()->can($permission)) {
                        abort(403, 'Unauthorized');
                    }
                }

                return $next($request);
            })->only($method);
        }
    }

    protected function getModelName()
    {
        return Str::replaceLast('Controller', '', class_basename($this));
    }
}
