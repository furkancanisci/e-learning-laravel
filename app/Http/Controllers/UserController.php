<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;


class UserController extends Controller
{
    public function index() {
        $users = User::all()->toArray();

        return Inertia::render('Users', [
            'user' => $users,
        ]);    
    }
}
