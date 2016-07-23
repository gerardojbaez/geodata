<?php

namespace Gerardojbaez\GeoData\Contracts;

interface CityContract
{
	public function country();
	public function region();
	public function scopeBySlug($query, $slug);
	public function scopeByCountryCode($query, $code);
	public function scopeByRegion($query, $region_id);
}