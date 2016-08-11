<?php

namespace Gerardojbaez\GeoData\Traits;

use Gerardojbaez\GeoData\Models\Region;

trait HasRegion
{
	/**
	 * Get parent region.
	 *
	 * @return mixed
	 */
	public function region()
	{
		return $this->belongsTo(Region::class);
	}

	/**
	 * Scope by region id.
	 *
	 * @return mixed
	 */
	public function scopeByRegion($query, $region_id)
	{
		return $query->where('region_id', $region_id);
	}
}