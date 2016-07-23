<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class SaintLuciaSeeder extends Seeder
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
    	return ['code' => 'LC', 'name' => 'Saint Lucia', 'slug' => 'saint-lucia'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 780441, 'country_code' => 'LC', 'name' => 'Castries', 'active' => 1, 'slug' => 'castries'],
            ['id' => 780442, 'country_code' => 'LC', 'name' => 'Choiseul', 'active' => 1, 'slug' => 'choiseul'],
            ['id' => 780443, 'country_code' => 'LC', 'name' => 'Dauphin', 'active' => 1, 'slug' => 'dauphin'],
            ['id' => 780444, 'country_code' => 'LC', 'name' => 'Dennery', 'active' => 1, 'slug' => 'dennery'],
            ['id' => 780445, 'country_code' => 'LC', 'name' => 'Gros Islet', 'active' => 1, 'slug' => 'gros-islet'],
            ['id' => 780446, 'country_code' => 'LC', 'name' => 'Laborie', 'active' => 1, 'slug' => 'laborie'],
            ['id' => 780447, 'country_code' => 'LC', 'name' => 'Micoud', 'active' => 1, 'slug' => 'micoud'],
            ['id' => 780448, 'country_code' => 'LC', 'name' => 'Praslin', 'active' => 1, 'slug' => 'praslin'],
            ['id' => 780449, 'country_code' => 'LC', 'name' => 'Soufriere', 'active' => 1, 'slug' => 'soufriere'],
            ['id' => 780450, 'country_code' => 'LC', 'name' => 'Vieux Fort', 'active' => 1, 'slug' => 'vieux-fort'],
            ['id' => 780451, 'country_code' => 'LC', 'name' => 'Anse la Raye', 'active' => 1, 'slug' => 'anse-la-raye']
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
