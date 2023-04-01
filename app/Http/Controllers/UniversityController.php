<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $university = University::all()->toArray();

        return Inertia::render('University', [
            'university' => $university,
        ]);    
    }

   
}
