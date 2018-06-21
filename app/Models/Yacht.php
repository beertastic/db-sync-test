<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yacht extends Model
{

    protected $table = 'yacht';

    protected $fillable = ['name'
        , 'legacy_id'
        , 'sale'
        , 'charter'
    ];

    public static function getNewIDFromLegacy($legacy_id) {
        if ( $legacy_id == null ) {
            return null;
        }

        $getID = Yacht::where('legacy_id', $legacy_id)->first();
        return $getID->id;
    }

}
