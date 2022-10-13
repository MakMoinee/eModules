<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignOutController extends Controller
{
    //
    function index()
    {
        session()->flush();
        return redirect('/');
    }
}
