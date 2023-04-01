<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index() {
        $projects = Projects::all()->toArray();

        return Inertia::render('Projects', [
            'projects' => $projects,
        ]);    
    }
}
