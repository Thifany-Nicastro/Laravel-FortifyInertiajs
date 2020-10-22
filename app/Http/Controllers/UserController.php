<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        // return view('users.index');
        return Inertia::render('Users/Index');
    }

    public function teste(Request $request)
    {
        return $request->all();
    }
}
