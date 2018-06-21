<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';

    protected $fillable = ['name'
        , 'legacy_id'
        , 'broker_id'
        , 'long'
        , 'lat'
        , 'parent_id'
        , 'timezone_id'
        , 'desc'
    ];

    public static function getNewIDFromLegacy($legacy_id) {
        if ( $legacy_id == null ) {
            return null;
        }

        $getID = Broker::where('legacy_id', $legacy_id)->first();
        return $getID->id;
    }

}