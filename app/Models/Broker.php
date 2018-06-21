<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    protected $table = 'broker';

    protected $fillable = ['name'
        , 'legacy_id'
    ];

    public function address() {
        return $this->belongsToMany('App\Models\Address');
    }

    public static function getNewIDFromLegacy($legacy_id) {
        if ( $legacy_id == null ) {
            return null;
        }

        $getID = Broker::where('legacy_id', $legacy_id)->first();
        return $getID->id;
    }

}
