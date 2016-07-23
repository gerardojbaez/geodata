<?php

namespace Gerardojbaez\GeoData\Traits;

use Gerardojbaez\GeoData\Models\City;

trait HasCities
{
	/**
	 * Get cities.
	 *
	 * @return mixed
	 */
	public function cities()
	{
		return $this->hasMany(City::class);
	}
}