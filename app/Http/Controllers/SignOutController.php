<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignOutController extends Controller
{
    //
    function index()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }
}
