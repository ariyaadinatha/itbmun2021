<?php

namespace App\Http\Controllers;

use App\delegations;
use App\delegationsDelegates;
use App\Mail\DelegationRegist;
use Illuminate\Http\Request;

class DelegationsController extends Controller
{
    public function sendDataDelegations(Request $request) {
        $delegation = new Delegations([
            "headDelegate" => $request->headDelegate,
            "institution" => $request->institution,
            "contactNumber" => $request->contactNumber,
            "lineId" => $request->lineId,
            "email" => $request->input('email1')
        ]);
        $delegation->save();

        $id = \App\delegations::where('headDelegate', $request->headDelegate)->first()->delegationId;

        for($i = 1; $i <= ($request->delegatesCount); $i++){
            $delegationDelegate = new DelegationsDelegates([
                "delegationId" => $id, 
                "fullName" => $request->input('fullName'.$i), 
                "email" => $request->input('email'.$i), 
                "nationality" => $request->input('nationality'.$i), 
                "idNumber" => $request->input('idNumber'.$i), 
                "gender" => $request->input('gender'.$i), 
                "medicalConditions" => $request->input('medicalConditions'.$i),
                "foodRestrictions" => $request->input('foodRestrictions'.$i), 
                "accommodation" => $request->input('accommodation'.$i),
                "munExperiences" => $request->input('munExperiences'.$i),
                "firstCouncilPreference" => $request->input('firstCouncilPreference'.$i), 
                "firstCouncilCountryPreference" => $request->input('firstCouncilCountryPreference'.$i), 
                "firstCouncilReason" => $request->input('firstCouncilReason'.$i), 
                "secondCouncilPreference" => $request->input('secondCouncilPreference'.$i), 
                "secondCouncilCountryPreference" => $request->input('secondCouncilCountryPreference'.$i), 
                "secondCouncilReason" => $request->input('secondCouncilReason'.$i), 
                "thirdCouncilPreference" => $request->input('thirdCouncilPreference'.$i), 
                "thirdCouncilCountryPreference" => $request->input('thirdCouncilCountryPreference'.$i), 
                "thirdCouncilReason" => $request->input('thirdCouncilReason'.$i), 
                "doubleDelegateName" => $request->input('doubleDelegateName'.$i),
                "doubleDelegateInstitution" => $request->input('doubleDelegateInstitution'.$i)
            ]);
            $delegationDelegate->save();

            \Mail::to($request->input('email'.$i))->send(new DelegationRegist($delegationDelegate));
        }
        
        return view("registration.delegationRegistSent")->with('data', $request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delegations = Delegations::all();
        return view("admin.dashboardContents.delegation")->with('delegations', $delegations);
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
     * @param  \App\delegations  $delegations
     * @return \Illuminate\Http\Response
     */
    public function show(delegations $delegations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\delegations  $delegations
     * @return \Illuminate\Http\Response
     */
    public function edit(delegations $delegations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\delegations  $delegations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, delegations $delegations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\delegations  $delegations
     * @return \Illuminate\Http\Response
     */
    public function destroy(delegations $delegations)
    {
        //
    }
}
