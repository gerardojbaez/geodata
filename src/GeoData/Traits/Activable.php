<?php

namespace Gerardojbaez\GeoData\Traits;

trait Activable
{
	/**
	 * Get only active records.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeActive($query)
	{
		$query->where('active', '1');
	}

	/**
	 * Get only not active records.
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeNotActive($query)
	{
		$query->where('active', '0');
	}
}