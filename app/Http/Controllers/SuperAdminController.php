<?php

namespace App\Http\Controllers;

use App\Models\EUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 0) {
                return redirect('/');
            }

            $allUsers = DB::table('e_users')->where('userType', '<>', 0)->get();
            $userss = json_decode($allUsers, true);

            return view('superadmin', [
                'eusers' => $userss
            ]);
        } else {
            return redirect('/');
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
        //
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
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 0) {
                return redirect('/');
            }
            if ($request->btnUpdateUser) {
                $nuser = EUsers::where(['userID' => $id])->get();
                $pass = $nuser[0]['password'];

                if ($request->vpassword == "") {
                    $pass = Hash::make($request->password);
                }
                

                $affectedRow = DB::table('e_users')
                    ->where('userID', $id)
                    ->update([
                        'username' => $request->username,
                        'firstname' => $request->firstname,
                        'middlename' => $request->middlename,
                        'lastname' => $request->lastname,
                        'email' => $request->email,
                        'lrn' => $request->lrn,
                        'track' => $request->track,
                        'userType' => $request->userrole,
                        'password' => $pass,
                        'updated_at' => date('Y-m-d H:i:s', strtotime(now()))
                    ]);
                if ($affectedRow > 0) {
                    session()->put('successUpdateUser', true);
                } else {
                    session()->put('errorUpdateUser', true);
                }
            }

            return redirect('/superadmin');
        } else {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 0) {
                return redirect('/');
            }

            $isDeleted = DB::table('e_users')->where(['userID' => $id])->delete();
            if ($isDeleted > 0) {
                session()->put('successDeleteUser', true);
            } else {
                session()->put('errorDeleteUser', true);
            }
            return redirect('/superadmin');
        } else {
            return redirect('/');
        }
    }
}
