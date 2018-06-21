<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Builder extends Model
{

    protected $table = 'builder';

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

        $getID = Builder::where('legacy_id', $legacy_id)->first();
        return $getID->id;
    }

}
