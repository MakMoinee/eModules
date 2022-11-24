<?php

namespace App\Http\Controllers;

use App\Models\EUsers;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $has = $request->session()->has('users');
        if ($has) {
            $user = session()->pull("users");
            session()->put('users', $user);
            if ($user[0]['userType'] == 1) {
                return redirect("/");
            }
            if ($user[0]['userType'] != 2) {
                return redirect('/');
            }

            return view('profile', ['user' => $user[0]]);
        } else {
            return redirect("/");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $has = $request->session()->has('users');
        if ($has) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 2) {
                return redirect('/');
            }


            $affectedRow = DB::table('e_users')
                ->where('userID', $request->uid)
                ->update([
                    'firstname' => $request->firstname,
                    'middlename' => $request->middlename,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                ]);

            if ($affectedRow > 0) {
                $user[0]['firstname'] = $request->firstname;
                $user[0]['middlename'] = $request->middlename;
                $user[0]['lastname'] = $request->lastname;
                $user[0]['email'] = $request->email;
                session()->put('users', $user);
                session()->put("successUpdate", true);
            } else {
                session()->put("errorUpdate", true);
            }
            return view('profile', ['user' => $user[0]]);
        } else {
            return redirect("/");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
