<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class BarbadosSeeder extends Seeder
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
    	return ['code' => 'BB', 'name' => 'Barbados', 'slug' => 'barbados'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 742838, 'country_code' => 'BB', 'name' => 'Christ Church', 'active' => 1, 'slug' => 'christ-church'],
            ['id' => 742839, 'country_code' => 'BB', 'name' => 'Saint Andrew', 'active' => 1, 'slug' => 'saint-andrew'],
            ['id' => 742840, 'country_code' => 'BB', 'name' => 'Saint George', 'active' => 1, 'slug' => 'saint-george'],
            ['id' => 742841, 'country_code' => 'BB', 'name' => 'Saint James', 'active' => 1, 'slug' => 'saint-james'],
            ['id' => 742842, 'country_code' => 'BB', 'name' => 'Saint John', 'active' => 1, 'slug' => 'saint-john'],
            ['id' => 742843, 'country_code' => 'BB', 'name' => 'Saint Joseph', 'active' => 1, 'slug' => 'saint-joseph'],
            ['id' => 742844, 'country_code' => 'BB', 'name' => 'Saint Lucy', 'active' => 1, 'slug' => 'saint-lucy'],
            ['id' => 742845, 'country_code' => 'BB', 'name' => 'Saint Michael', 'active' => 1, 'slug' => 'saint-michael'],
            ['id' => 742846, 'country_code' => 'BB', 'name' => 'Saint Peter', 'active' => 1, 'slug' => 'saint-peter'],
            ['id' => 742847, 'country_code' => 'BB', 'name' => 'Saint Philip', 'active' => 1, 'slug' => 'saint-philip'],
            ['id' => 742848, 'country_code' => 'BB', 'name' => 'Saint Thomas', 'active' => 1, 'slug' => 'saint-thomas']
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
