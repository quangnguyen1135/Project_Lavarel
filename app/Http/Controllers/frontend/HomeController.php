<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $name = ''; // Initialize name variable

        // Check if the user is authenticated
        if (Auth::check()) {
            // If authenticated, retrieve the user's email
            $email = Auth::user()->email;

        }

        // Pass the name variable to the view
        return view('frontend.home.index', compact('email'));
    }
}

