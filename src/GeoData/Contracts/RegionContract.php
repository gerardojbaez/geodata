<?php

namespace Gerardojbaez\GeoData\Contracts;

interface RegionContract
{
	public function country();
	public function cities();
	public function scopeBySlug($query, $code);
	public function scopeByCountryCode($query, $code);
}