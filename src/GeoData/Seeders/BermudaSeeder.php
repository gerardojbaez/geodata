<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class BermudaSeeder extends Seeder
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
    	return ['code' => 'BM', 'name' => 'Bermuda', 'slug' => 'bermuda'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 742826, 'country_code' => 'BM', 'name' => 'Devonshire', 'active' => 1, 'slug' => 'devonshire'],
            ['id' => 742827, 'country_code' => 'BM', 'name' => 'Hamilton', 'active' => 1, 'slug' => 'hamilton'],
            ['id' => 742828, 'country_code' => 'BM', 'name' => 'Paget', 'active' => 1, 'slug' => 'paget'],
            ['id' => 742829, 'country_code' => 'BM', 'name' => 'Pembroke', 'active' => 1, 'slug' => 'pembroke'],
            ['id' => 742830, 'country_code' => 'BM', 'name' => 'Saint', 'active' => 1, 'slug' => 'saint'],
            ['id' => 742831, 'country_code' => 'BM', 'name' => 'Saint George\'s', 'active' => 1, 'slug' => 'saint-georges'],
            ['id' => 742832, 'country_code' => 'BM', 'name' => 'Sandys', 'active' => 1, 'slug' => 'sandys'],
            ['id' => 742833, 'country_code' => 'BM', 'name' => 'Smith\'s', 'active' => 1, 'slug' => 'smiths'],
            ['id' => 742834, 'country_code' => 'BM', 'name' => 'Southampton', 'active' => 1, 'slug' => 'southampton'],
            ['id' => 742835, 'country_code' => 'BM', 'name' => 'Warwick', 'active' => 1, 'slug' => 'warwick']
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
