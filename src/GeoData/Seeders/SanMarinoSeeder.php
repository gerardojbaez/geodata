<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class SanMarinoSeeder extends Seeder
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
    	return ['code' => 'SM', 'name' => 'San Marino', 'slug' => 'san-marino'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 780453, 'country_code' => 'SM', 'name' => 'Acquaviva', 'active' => 1, 'slug' => 'acquaviva'],
            ['id' => 780454, 'country_code' => 'SM', 'name' => 'Borgo Maggiore', 'active' => 1, 'slug' => 'borgo-maggiore'],
            ['id' => 780455, 'country_code' => 'SM', 'name' => 'Chiesanuova', 'active' => 1, 'slug' => 'chiesanuova'],
            ['id' => 780456, 'country_code' => 'SM', 'name' => 'Montegiardino', 'active' => 1, 'slug' => 'montegiardino'],
            ['id' => 780457, 'country_code' => 'SM', 'name' => 'Domagnano', 'active' => 1, 'slug' => 'domagnano'],
            ['id' => 780458, 'country_code' => 'SM', 'name' => 'Faetano', 'active' => 1, 'slug' => 'faetano'],
            ['id' => 780459, 'country_code' => 'SM', 'name' => 'Fiorentino', 'active' => 1, 'slug' => 'fiorentino'],
            ['id' => 780460, 'country_code' => 'SM', 'name' => 'San Marino', 'active' => 1, 'slug' => 'san-marino'],
            ['id' => 780461, 'country_code' => 'SM', 'name' => 'Serravalle', 'active' => 1, 'slug' => 'serravalle']
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
