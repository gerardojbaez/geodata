<?php 

namespace Gerardojbaez\GeoData\Traits;

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