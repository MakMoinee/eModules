<?php

namespace App\Http\Controllers;

use App\Models\EUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);
            return redirect('/strands');
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $un = $request->username;
        $pw = $request->password;

        if ($un && $pw) {

            $queryResult = EUsers::where([['username', '=', $un]])->get();
            $users =  json_decode($queryResult, true);
            $user = [];
            $tempUsers = EUsers::all();
            $count = count($tempUsers);
            foreach ($users as $u) {
                if (password_verify($pw, $u['password'])) {
                    $u['userID'] = $u['userID'];
                    $u['password'] = $pw;
                    array_push($user, $u);
                    break;
                }
            }

            if (count($user) == 0) {
                session()->put('errorLogin', true);
                return view('welcome');
            } else {
                session()->put('users', $user);
                session()->put('successLogin', true);

                if ($user[0]['userType'] == 1) {
                    return redirect("/admin");
                }
                return redirect('/strands');
            }
        } else {
            return view('welcome');
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
