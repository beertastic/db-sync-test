<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yachtmodel extends Model
{

    protected $table = 'yachtmodel';

    protected $fillable = ['name'
        , 'legacy_id'
        , 'builder_id'
    ];

}
