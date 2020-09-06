<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delegations extends Model
{
    protected $table = 'delegations';

    protected $fillable = [
        'institution',
        'headDelegate',
        'contactNumber',
        'lineId',
        'email'
    ];

    protected $primaryKey = 'delegationId';

    public function delegationsDelegates(){
        return $this->hasMany('App\delegationsDelegates', 'delegationId');
    }
}
