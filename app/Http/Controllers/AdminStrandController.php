<?php

namespace App\Http\Controllers;

use App\Models\AcademicStrands;
use App\Models\AcademicTrack;
use App\Models\EUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminStrandController extends Controller
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
            $nem = $user[0]['username'];
            $nUsers = EUsers::all();
            $total = count($nUsers);
            $newUsers = DB::table('vwtotalnewusers')->first();
            $totalNewUsers = $newUsers->TotalNewUsers;

            $queryResult = DB::table('vwallstrands')->get();
            $result = json_decode($queryResult, true);
            $modules = [];
            foreach ($result as $r) {
                array_push($modules, $r);
            }

            $strandsAvailable = AcademicStrands::all();

            return view('adminstrands', ['nem' => $nem, 'totalNewUsers' => $totalNewUsers, 'totalUsers' => $total, 'modules' => $modules, 'availableStrands' => $strandsAvailable]);
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

        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }

            if (isset($request->btnAdd)) {
                //check if existing sequence
                $queryResult = DB::table('vwallstrands')->where(
                    [
                        'strandID' => $request->strand,
                        'category' => $request->category,
                        'sequence' => $request->sequence
                    ]
                )->get();
                $count = count($queryResult);
                if ($count > 0) {
                    session()->put('errorExistingSequence', true);
                } else {
                    $newTrack = new AcademicTrack();
                    $newTrack->description = $request->description;
                    $newTrack->strandID = $request->strand;
                    $newTrack->sequence = $request->sequence;
                    $newTrack->category = $request->category;
                    $newTrack->hours = $request->hours;
                    $newTrack->prerequisite = $request->prerequisite;
                    $affectedRows = $newTrack->save();
                    if ($affectedRows > 0) {
                        session()->put('successAddingModule', true);
                    } else {
                        session()->put('errorAddingModule', true);
                    }
                }
            } else if (isset($request->btnUpdate)) {
                $affectedRows = DB::table('academic_tracks')
                    ->where(['trackID' => $request->trackID])
                    ->update([
                        'description' => $request->description,
                        'hours' => $request->hours,
                        'prerequisite' => $request->prerequisite
                    ]);

                if ($affectedRows > 0) {
                    session()->put('successUpdatingModule', true);
                } else {
                    session()->put('errorUpdatingModule', true);
                }
            }


            return redirect('/adminstrands');
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }
            return redirect('/adminstrands');
        }
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }
            return redirect('/adminstrands');
        }
        return redirect('/');
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

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }
            return redirect('/adminstrands');
        }
        return redirect('/');
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

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }

            $affectedRows = DB::table('academic_tracks')
                ->where(['trackID' => $id])
                ->delete();

            if ($affectedRows > 0) {
                session()->put('successDeletingModule', true);
            } else {
                session()->put('errorDeletingModule', true);
            }
            return redirect('/adminstrands');
        }
        return redirect('/');
    }
}
