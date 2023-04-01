<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use Inertia\Inertia;
use Inertia\Response;

class CourseController extends Controller
{
    public function index() {
        $courses = Courses::all()->toArray();

        return Inertia::render('Courses', [
            'courses' => $courses,
        ]);    
    }
}
