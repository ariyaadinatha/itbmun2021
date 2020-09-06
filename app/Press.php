<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    protected $fillable = [
        'title',
        'body',
        'imgurl',
        'created_at',
        'updated_at'
    ];

    protected $table = "press";

    protected $primaryKey = "id";

    
}
