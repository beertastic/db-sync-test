<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    protected $fillable = [   'name'
        , 'legacy_id'
        , 'group_id'
        , 'address_type'
        , 'tel'
        , 'fax'
        , 'email'
        , 'dept_name'
        , 'address_0'
        , 'address_1'
        , 'address_2'
        , 'address_3'
        , 'address_4'
        , 'address_5'
        , 'address_6'
        , 'address_7'
        , 'address_8'
        , 'address_9'
        , 'address_10'
        , 'address_11'
        , 'address_12'
        , 'address_13'
        , 'address_14'
        , 'address_15'
        , 'address_16'
        , 'country_id'
    ];

    public function area() {
        return $this->hasOne('App\Models\Group', 'id', 'area_id');
    }

    public function broker() {
        return $this->belongsToMany('App\Models\Address');
    }

    public function builder() {
        return $this->belongsToMany('App\Models\Address');
    }

}
