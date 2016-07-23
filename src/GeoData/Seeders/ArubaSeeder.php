<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class ArubaSeeder extends Seeder
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
    	return ['code' => 'AW', 'name' => 'Aruba', 'slug' => 'aruba'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 781508, 'country_code' => 'AW', 'name' => 'Palm Beach', 'active' => 1, 'slug' => 'palm-beach'],
            ['id' => 781509, 'country_code' => 'AW', 'name' => 'Noord', 'active' => 1, 'slug' => 'noord'],
            ['id' => 781510, 'country_code' => 'AW', 'name' => 'Paradera', 'active' => 1, 'slug' => 'paradera'],
            ['id' => 781511, 'country_code' => 'AW', 'name' => 'Oranjestad', 'active' => 1, 'slug' => 'oranjestad'],
            ['id' => 781512, 'country_code' => 'AW', 'name' => 'Santa Cruz', 'active' => 1, 'slug' => 'santa-cruz'],
            ['id' => 781513, 'country_code' => 'AW', 'name' => 'Pos Chiquito', 'active' => 1, 'slug' => 'pos-chiquito'],
            ['id' => 781514, 'country_code' => 'AW', 'name' => 'Savaneta', 'active' => 1, 'slug' => 'savaneta'],
            ['id' => 781515, 'country_code' => 'AW', 'name' => 'San Nicolas', 'active' => 1, 'slug' => 'san-nicolas'],
            ['id' => 781516, 'country_code' => 'AW', 'name' => 'Seroe Colorado', 'active' => 1, 'slug' => 'seroe-colorado']
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

    	];
    }
}
