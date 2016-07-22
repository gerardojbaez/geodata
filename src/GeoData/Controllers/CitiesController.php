<?php

namespace Gerardojbaez\GeoData\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gerardojbaez\GeoData\Models\City;

class CitiesController extends Controller
{
	/**
	 * Show cities list.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
    public function cities($country_code, $region_id)
    {
    	$cities = City::orderBy('name', 'ASC')->byCountryCode($country_code)->byRegion($region_id)->get([
    		'id',
    		'country_code',
    		'name',
    		'slug'
    	]);

    	return response()->json([
    		'cities' => $cities
    	]);
    }
}
