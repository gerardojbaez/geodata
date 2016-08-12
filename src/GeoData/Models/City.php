<?php

namespace Gerardojbaez\GeoData\Models;

use Illuminate\Database\Eloquent\Model;
use Gerardojbaez\GeoData\Contracts\CityContract;
use Gerardojbaez\GeoData\Contracts\HasCountryContract;
use Gerardojbaez\GeoData\Traits\HasCountry;
use Gerardojbaez\GeoData\Traits\HasRegion;
use Gerardojbaez\GeoData\Traits\Sluggable;
use Gerardojbaez\GeoData\Traits\Activable;

class City extends Model implements CityContract, HasCountryContract
{
    use HasCountry, HasRegion, Sluggable, Activable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'country_code',
        'region_id',
        'active'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
