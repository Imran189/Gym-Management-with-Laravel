<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {

                $trainer = Trainer::latest()->get();
                return view('frontend.userhome', compact('trainer'));
            } else {
                return view('backend.body.index');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {

            $trainer = Trainer::latest()->get();
            return redirect('home', compact('trainer'));
        } else {

            $trainer = Trainer::latest()->get();
            return view('frontend.userhome', compact('trainer'));
        }
    }
}
