<?php

namespace App\Http\Controllers;

use App\Models\ModuleHelper;
use App\Models\Modules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Collection\Set;

class ABMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (session()->exists("users") && $request['category']) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 2) {
                return redirect('/');
            }

            $data = DB::table('academic_strands')->where(['description' => $user[0]['track']])->get();
            $strandID  = $data[0]->strandID;


            $queryResult = DB::table('academic_tracks')
                ->where(['strandID' => $strandID, 'category' => $request['category']])
                ->get();

            $trackRes = json_decode($queryResult, true);
            $availableEMod = array();
            $moduleHelper = array();
            foreach ($trackRes as $tr) {
                $queryResult2 = DB::table('modules')
                    ->where(['trackID' => $tr['trackID']])
                    ->get();
                $tmpMod = new ModuleHelper();
                $tmpMod->trackID = $tr['trackID'];
                if (count($queryResult2) == 0) {
                    $tmpMod->isAvailable = false;
                } else {
                    $tmpMod->isAvailable = true;
                    $tmpEmod = json_decode($queryResult2, true);
                    array_push($availableEMod, $tmpEmod[0]);
                }
                array_push($moduleHelper, $tmpMod);
            }

            // dd([
            //     'track' => $user[0]['track'],
            //     'user' => $user[0]['username'],
            //     'trackRes' => $trackRes,
            //     'category' => $request['category'],
            //     'moduleHelper' => $moduleHelper,
            //     'emodules' => $availableEMod,
            //     'baseURL' => $_SERVER['DOCUMENT_ROOT'] . '/storage/emodules/'
            // ]);

            return view('strandabm', [
                'track' => $user[0]['track'],
                'user' => $user[0]['username'],
                'trackRes' => $trackRes,
                'category' => $request['category'],
                'moduleHelper' => $moduleHelper,
                'emodules' => $availableEMod,
                'baseURL' => $_SERVER['DOCUMENT_ROOT'] . '/storage/emodules/'
            ]);
        } else {
            if ($request['category'] && $request['strand']) {
                $data = DB::table('academic_strands')->where(['description' => $request['strand']])->get();
                $strandID  = $data[0]->strandID;
                $queryResult = DB::table('academic_tracks')
                    ->where(['strandID' => $strandID, 'category' => $request['category']])
                    ->get();

                $trackRes = json_decode($queryResult, true);
                return view('strandcat', [
                    'track' => $request['strand'],
                    'category' => $request['category'],
                    'trackRes' => $trackRes
                ]);
            }
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
