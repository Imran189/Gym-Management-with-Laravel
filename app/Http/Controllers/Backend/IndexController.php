<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Logout(Request $request)
    {
        $request->session()->flush();

        return redirect('/');
    }
}
