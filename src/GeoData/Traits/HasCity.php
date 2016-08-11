<?php

namespace Gerardojbaez\GeoData\Traits;

use Gerardojbaez\GeoData\Models\City;

trait HasCity
{
	/**
	 * Get parent city.
	 *
	 * @return mixed
	 */
	public function city()
	{
		return $this->belongsTo(City::class);
	}
}