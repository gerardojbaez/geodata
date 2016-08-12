<?php

namespace Gerardojbaez\GeoData\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gerardojbaez\GeoData\Models\Region;

class RegionsController extends Controller
{
    /**
     * Show regions list.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function regions($country_code)
    {
        $regions = Region::active()
            ->orderBy('name', 'ASC')
            ->whereHas('country', function($query) {
                $query->active();
            })
            ->where('country_code', $country_code)
            ->get([
                'id',
                'country_code',
                'name',
                'slug'
            ]);

        return response()->json([
            'regions' => $regions
        ]);
    }
}
