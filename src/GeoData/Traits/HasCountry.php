<?php

namespace Gerardojbaez\GeoData\Traits;

use Gerardojbaez\GeoData\Models\Country;

trait HasCountry
{
	/**
	 * Get parent country.
	 *
	 * @return mixed
	 */
	public function country()
	{
		return $this->belongsTo(Country::class);
	}

	/**
	 * Scope by country code.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeByCountryCode($query, $code)
	{
		return $query->where('country_code', $code);
	}
}