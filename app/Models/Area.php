<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'area';

    protected $fillable = ['name'
                         , 'legacy_id'
                         , 'long'
                         , 'lat'
    ];

    public static function getNewIDFromLegacy($legacy_id) {
        if ( $legacy_id == null ) {
            return null;
        }

        $getID = Broker::where('legacy_id', $legacy_id)->first();
        return $getID->id;
    }

}