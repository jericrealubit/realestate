<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {

        //dd(Auth::user());

        return Inertia::render('Index/Index', [
            'message' => 'Hello from Laravel'
        ]);
    }

    public function show() {
        return Inertia::render('Index/Show');
    }
}
