<?php

namespace Gerardojbaez\GeoData\Traits;

trait Sluggable
{
	/**
	 * Scope by slug.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $slug
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeBySlug($query, $slug)
	{
		return $query->where('slug', $slug);
	}
}