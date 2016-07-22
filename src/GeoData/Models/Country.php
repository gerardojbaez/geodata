<?php

namespace Gerardojbaez\GeoData\Models;

use Illuminate\Database\Eloquent\Model;
use Gerardojbaez\GeoData\Contracts\CountryContract;
use Gerardojbaez\GeoData\Contracts\HasRegionsContract;
use Gerardojbaez\GeoData\Contracts\HasCitiesContract;
use Gerardojbaez\GeoData\Traits\HasRegions;
use Gerardojbaez\GeoData\Traits\HasCities;
use Gerardojbaez\GeoData\Traits\Sluggable;

class Country extends Model implements CountryContract, HasRegionsContract, HasCitiesContract
{
    use HasRegions, HasCities, Sluggable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'code',
        'active'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Scope by country code.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByCountryCode($query, $code)
    {
        return $query->where('code', $code);
    }
}
