<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;


class DepartmentController extends Controller
{
    public function index() {
        $departments = Departments::all()->toArray();

        return Inertia::render('Departments', [
            'departments' => $departments,
        ]);    
    }

    
}
