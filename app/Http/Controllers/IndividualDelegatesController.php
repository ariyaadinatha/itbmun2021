<?php

namespace App\Http\Controllers;

use App\individualDelegates;
use App\Mail\IndividualDelegateRegist;
use Illuminate\Http\Request;

class IndividualDelegatesController extends Controller
{
    public function sendDataIndividualDelegate(Request $request) {
        $data = new IndividualDelegates([
            "fullName" => $request->fullName,
            "institution" => $request->institution,
            "contactNumber" => $request->contactNumber,
            "lineId" => $request->lineId,
            "email" => $request->email,
            "nationality" => $request->nationality,
            "idNumber" => $request->idNumber,
            "gender" => $request->gender,
            "medicalConditions" => $request->medicalConditions,
            "munExperiences" => $request->munExperiences,
            "firstCouncilPreference" => $request->firstCouncilPreference,
            "firstCouncilCountryPreference" => $request->firstCouncilCountryPreference,
            "firstCouncilReason" => $request->firstCouncilReason,
            "secondCouncilPreference" => $request->secondCouncilPreference,
            "secondCouncilCountryPreference" => $request->secondCouncilCountryPreference,
            "secondCouncilReason" => $request->secondCouncilReason,
            "thirdCouncilPreference" => $request->thirdCouncilPreference,
            "thirdCouncilCountryPreference" => $request->thirdCouncilCountryPreference,
            "thirdCouncilReason" => $request->thirdCouncilReason,
            "foodRestrictions" => $request->foodRestrictions,
            "accommodation" => $request->accommodation,
            "doubleDelegateName" => $request->doubleDelegateName,
            "doubleDelegateInstitution" => $request->doubleDelegateInstitution
        ]);
        $data->save();

        \Mail::to($request->email)->send(new IndividualDelegateRegist($data));

        return view("registration.individualRegistSent")->with('data', $request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delegates = individualDelegates::all();
        return view("admin.dashboardContents.delegate")->with('delegates', $delegates);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\individualDelegates  $individualDelegates
     * @return \Illuminate\Http\Response
     */
    public function show(individualDelegates $individualDelegates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\individualDelegates  $individualDelegates
     * @return \Illuminate\Http\Response
     */
    public function edit(individualDelegates $individualDelegates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\individualDelegates  $individualDelegates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, individualDelegates $individualDelegates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\individualDelegates  $individualDelegates
     * @return \Illuminate\Http\Response
     */
    public function destroy(individualDelegates $individualDelegates)
    {
        //
    }
}
