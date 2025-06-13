<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {

        // Listing::make([
        //     'beds' => 2, 'baths' => 2, 'area' => 100, 'city' => 'North', 'street' => 'Tinker st', 'street_nr' => 20, 'code' => 'TS', 'price' => 200_000
        // ]);
        //dd(Auth::user());

        return Inertia::render('Index/Index', [
            'message' => 'Hello from Laravel'
        ]);
    }

    public function show() {
        return Inertia::render('Index/Show');
    }
}
