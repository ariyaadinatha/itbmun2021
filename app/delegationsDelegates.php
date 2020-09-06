<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delegationsDelegates extends Model
{
    protected $table = 'delegations_delegates';

    protected $fillable = [
        'delegationId',
        'fullName',
        'email',
        'nationality',
        'idNumber',
        'gender',
        'medicalConditions',
        'munExperiences',
        'firstCouncilPreference',
        'firstCouncilCountryPreference',
        'firstCouncilReason',
        'secondCouncilPreference',
        'secondCouncilCountryPreference',
        'secondCouncilReason',
        'thirdCouncilPreference',
        'thirdCouncilCountryPreference',
        'thirdCouncilReason',
        'foodRestrictions',
        'accommodation', 
        'doubleDelegateName',
        'doubleDelegateInstitution'
    ];

    protected $primaryKey = 'delegationDelegatesId';

    public function delegations(){
        return $this->belongsTo('App\delegations', 'delegationId');
    }
}
