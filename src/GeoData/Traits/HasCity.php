<?php 

namespace Gerardojbaez\GeoData\Traits;

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