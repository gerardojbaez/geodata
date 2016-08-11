<?php

namespace Gerardojbaez\GeoData\Traits;

use Gerardojbaez\GeoData\Models\Region;

trait HasRegions
{
	/**
	 * Get regions.
	 *
	 * @return mixed
	 */
	public function regions()
	{
		return $this->hasMany(Region::class);
	}
}