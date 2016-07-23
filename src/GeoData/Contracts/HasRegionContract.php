<?php

namespace Gerardojbaez\GeoData\Contracts;

interface HasRegionContract
{
	public function region();
	public function scopeByRegion($query, $region_id);
}