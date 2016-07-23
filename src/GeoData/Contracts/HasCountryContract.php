<?php

namespace Gerardojbaez\GeoData\Contracts;

interface HasCountryContract
{
	public function country();
	public function scopeByCountryCode($query, $code);
}