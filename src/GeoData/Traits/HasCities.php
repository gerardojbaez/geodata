<?php 

namespace Gerardojbaez\GeoData\Traits;

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