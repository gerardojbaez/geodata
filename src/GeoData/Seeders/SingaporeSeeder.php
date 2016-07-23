<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class SingaporeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create($this->country());
        Region::insert($this->regions());

        if ($this->cities() > 4000)
        {
            foreach (array_chunk($this->cities(), 3500) as $chunk)
                City::insert($chunk);
        }
        else
        {
            City::insert($this->cities());
        }
    }

        /**
     * Get country.
     *
     * @return array
     */
    public function country()
    {
    	return ['code' => 'SG', 'name' => 'Singapore', 'slug' => 'singapore'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 782502, 'country_code' => 'SG', 'name' => 'Central', 'active' => 1, 'slug' => 'central'],
            ['id' => 782503, 'country_code' => 'SG', 'name' => 'Central East', 'active' => 1, 'slug' => 'central-east'],
            ['id' => 782504, 'country_code' => 'SG', 'name' => 'Central North', 'active' => 1, 'slug' => 'central-north'],
            ['id' => 782505, 'country_code' => 'SG', 'name' => 'Central West', 'active' => 1, 'slug' => 'central-west'],
            ['id' => 782506, 'country_code' => 'SG', 'name' => 'City Central', 'active' => 1, 'slug' => 'city-central'],
            ['id' => 782507, 'country_code' => 'SG', 'name' => 'East Coast', 'active' => 1, 'slug' => 'east-coast'],
            ['id' => 782508, 'country_code' => 'SG', 'name' => 'Far East', 'active' => 1, 'slug' => 'far-east'],
            ['id' => 782509, 'country_code' => 'SG', 'name' => 'North', 'active' => 1, 'slug' => 'north'],
            ['id' => 782510, 'country_code' => 'SG', 'name' => 'West', 'active' => 1, 'slug' => 'west']
    	];
    }

    /**
     * Get region cities.
     *
     * @return array
     */
    public function cities()
    {
    	return [
            ['id' => 410047, 'region_id' => 782502, 'country_code' => 'SG', 'name' => 'District 10', 'active' => 1, 'slug' => 'district-10'],
            ['id' => 410046, 'region_id' => 782502, 'country_code' => 'SG', 'name' => 'District 9', 'active' => 1, 'slug' => 'district-9'],
            ['id' => 410048, 'region_id' => 782503, 'country_code' => 'SG', 'name' => 'District 12', 'active' => 1, 'slug' => 'district-12'],
            ['id' => 410049, 'region_id' => 782503, 'country_code' => 'SG', 'name' => 'District 13', 'active' => 1, 'slug' => 'district-13'],
            ['id' => 410050, 'region_id' => 782503, 'country_code' => 'SG', 'name' => 'District 14', 'active' => 1, 'slug' => 'district-14'],
            ['id' => 410051, 'region_id' => 782504, 'country_code' => 'SG', 'name' => 'District 19', 'active' => 1, 'slug' => 'district-19'],
            ['id' => 410052, 'region_id' => 782504, 'country_code' => 'SG', 'name' => 'District 20', 'active' => 1, 'slug' => 'district-20'],
            ['id' => 410053, 'region_id' => 782505, 'country_code' => 'SG', 'name' => 'District 11', 'active' => 1, 'slug' => 'district-11'],
            ['id' => 410054, 'region_id' => 782505, 'country_code' => 'SG', 'name' => 'District 21', 'active' => 1, 'slug' => 'district-21'],
            ['id' => 410055, 'region_id' => 782506, 'country_code' => 'SG', 'name' => 'District 1', 'active' => 1, 'slug' => 'district-1'],
            ['id' => 410056, 'region_id' => 782506, 'country_code' => 'SG', 'name' => 'District 2', 'active' => 1, 'slug' => 'district-2'],
            ['id' => 410057, 'region_id' => 782506, 'country_code' => 'SG', 'name' => 'District 3', 'active' => 1, 'slug' => 'district-3'],
            ['id' => 410058, 'region_id' => 782506, 'country_code' => 'SG', 'name' => 'District 4', 'active' => 1, 'slug' => 'district-4'],
            ['id' => 410059, 'region_id' => 782506, 'country_code' => 'SG', 'name' => 'District 5', 'active' => 1, 'slug' => 'district-5'],
            ['id' => 410060, 'region_id' => 782506, 'country_code' => 'SG', 'name' => 'District 6', 'active' => 1, 'slug' => 'district-6'],
            ['id' => 410061, 'region_id' => 782506, 'country_code' => 'SG', 'name' => 'District 7', 'active' => 1, 'slug' => 'district-7'],
            ['id' => 410062, 'region_id' => 782506, 'country_code' => 'SG', 'name' => 'District 8', 'active' => 1, 'slug' => 'district-8'],
            ['id' => 410063, 'region_id' => 782507, 'country_code' => 'SG', 'name' => 'District 15', 'active' => 1, 'slug' => 'district-15'],
            ['id' => 410064, 'region_id' => 782507, 'country_code' => 'SG', 'name' => 'District 16', 'active' => 1, 'slug' => 'district-16'],
            ['id' => 410065, 'region_id' => 782508, 'country_code' => 'SG', 'name' => 'District 17', 'active' => 1, 'slug' => 'district-17'],
            ['id' => 410066, 'region_id' => 782508, 'country_code' => 'SG', 'name' => 'District 18', 'active' => 1, 'slug' => 'district-18'],
            ['id' => 410067, 'region_id' => 782509, 'country_code' => 'SG', 'name' => 'District 25', 'active' => 1, 'slug' => 'district-25'],
            ['id' => 410068, 'region_id' => 782509, 'country_code' => 'SG', 'name' => 'District 26', 'active' => 1, 'slug' => 'district-26'],
            ['id' => 410069, 'region_id' => 782509, 'country_code' => 'SG', 'name' => 'District 27', 'active' => 1, 'slug' => 'district-27'],
            ['id' => 410070, 'region_id' => 782509, 'country_code' => 'SG', 'name' => 'District 28', 'active' => 1, 'slug' => 'district-28'],
            ['id' => 410071, 'region_id' => 782510, 'country_code' => 'SG', 'name' => 'District 22', 'active' => 1, 'slug' => 'district-22'],
            ['id' => 410072, 'region_id' => 782510, 'country_code' => 'SG', 'name' => 'District 23', 'active' => 1, 'slug' => 'district-23'],
            ['id' => 410073, 'region_id' => 782510, 'country_code' => 'SG', 'name' => 'District 24', 'active' => 1, 'slug' => 'district-24']
    	];
    }
}
