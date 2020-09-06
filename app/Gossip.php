<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gossip;

class Gossip extends Model
{
    protected $fillable = [
        'sender',
        'reciever',
        'council',
        'title',
        'body',
        'image'
    ];

    protected $table = "gossip";

    protected $primaryKey = "id";
}
