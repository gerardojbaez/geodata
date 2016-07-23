<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class JamaicaSeeder extends Seeder
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
    	return ['code' => 'JM', 'name' => 'Jamaica', 'slug' => 'jamaica'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 743830, 'country_code' => 'JM', 'name' => 'Surrey', 'active' => 1, 'slug' => 'surrey'],
            ['id' => 743835, 'country_code' => 'JM', 'name' => 'Middlesex', 'active' => 1, 'slug' => 'middlesex'],
            ['id' => 743841, 'country_code' => 'JM', 'name' => 'Cornwall', 'active' => 1, 'slug' => 'cornwall']
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
            ['id' => 37853, 'region_id' => 743830, 'country_code' => 'JM', 'name' => 'Kingston', 'active' => 1, 'slug' => 'kingston'],
            ['id' => 37854, 'region_id' => 743830, 'country_code' => 'JM', 'name' => 'Portland', 'active' => 1, 'slug' => 'portland'],
            ['id' => 37855, 'region_id' => 743830, 'country_code' => 'JM', 'name' => 'Saint Andrew', 'active' => 1, 'slug' => 'saint-andrew'],
            ['id' => 37856, 'region_id' => 743830, 'country_code' => 'JM', 'name' => 'Saint Thomas', 'active' => 1, 'slug' => 'saint-thomas'],
            ['id' => 37857, 'region_id' => 743835, 'country_code' => 'JM', 'name' => 'Clarendon', 'active' => 1, 'slug' => 'clarendon'],
            ['id' => 37858, 'region_id' => 743835, 'country_code' => 'JM', 'name' => 'Manchester', 'active' => 1, 'slug' => 'manchester'],
            ['id' => 37859, 'region_id' => 743835, 'country_code' => 'JM', 'name' => 'Saint Ann', 'active' => 1, 'slug' => 'saint-ann'],
            ['id' => 37860, 'region_id' => 743835, 'country_code' => 'JM', 'name' => 'Saint Catherine', 'active' => 1, 'slug' => 'saint-catherine'],
            ['id' => 37861, 'region_id' => 743835, 'country_code' => 'JM', 'name' => 'Saint Mary', 'active' => 1, 'slug' => 'saint-mary'],
            ['id' => 37862, 'region_id' => 743841, 'country_code' => 'JM', 'name' => 'Hanover', 'active' => 1, 'slug' => 'hanover'],
            ['id' => 37863, 'region_id' => 743841, 'country_code' => 'JM', 'name' => 'Saint Elizabeth', 'active' => 1, 'slug' => 'saint-elizabeth'],
            ['id' => 37864, 'region_id' => 743841, 'country_code' => 'JM', 'name' => 'Saint James', 'active' => 1, 'slug' => 'saint-james'],
            ['id' => 37865, 'region_id' => 743841, 'country_code' => 'JM', 'name' => 'Trelawny', 'active' => 1, 'slug' => 'trelawny'],
            ['id' => 37866, 'region_id' => 743841, 'country_code' => 'JM', 'name' => 'Westmoreland', 'active' => 1, 'slug' => 'westmoreland']
    	];
    }
}
