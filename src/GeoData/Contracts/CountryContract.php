<?php

namespace Gerardojbaez\GeoData\Contracts;

interface CountryContract
{
	public function regions();
	public function cities();
	public function scopeByCountryCode($query, $code);
	public function scopeBySlug($query, $slug);
}