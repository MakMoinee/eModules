<?php

namespace App\Http\Controllers;

use App\Models\EUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect("/");
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

        if ($request->btnSignup) {
            $euser = new EUsers();
            $euser->username = $request->username;
            $euser->password = Hash::make($request->password);
            $euser->firstname = $request->firstname;
            $euser->middlename = $request->middlename;
            $euser->lastname = $request->lastname;
            $euser->lrn = $request->lrn;
            $euser->track = $request->track;
            $euser->email = $request->email;
            $euser->userType = 2;
            $isSave = $euser->save();

            $newSuser = new User();
            $newSuser->username = $request->username;
            $newSuser->email = $request->email;
            $newSuser->password = Hash::make($request->password);
            $newSuser->save();

            if ($isSave) {
                session()->put("successCreate", true);
                return redirect("/");
            }
            session()->put("errorCreate", true);
            return redirect("/");
        } else {
            return redirect('/');
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
