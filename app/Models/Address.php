<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table ="address";

    protected $fillable=['ward_id', 'district_id', 'city_id'];
}
