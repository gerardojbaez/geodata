<?php

namespace Gerardojbaez\GeoData\Models;

use Illuminate\Database\Eloquent\Model;
use Gerardojbaez\GeoData\Contracts\RegionContract;
use Gerardojbaez\GeoData\Contracts\HasCountryContract;
use Gerardojbaez\GeoData\Contracts\HasCitiesContract;
use Gerardojbaez\GeoData\Traits\HasCountry;
use Gerardojbaez\GeoData\Traits\HasCities;
use Gerardojbaez\GeoData\Traits\Sluggable;
use Gerardojbaez\GeoData\Traits\Activable;

class Region extends Model implements RegionContract, HasCountryContract, HasCitiesContract
{
    use HasCountry, HasCities, Sluggable, Activable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'country_code',
        'active'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
