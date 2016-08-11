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
		return $this->belongsTo(
			Country::class,
			(property_exists($this, 'countryForeignKey') ? $this->countryForeignKey : 'country_code'),
			(property_exists($this, 'countryOtherKey') ? $this->countryOtherKey : 'code')
		);
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