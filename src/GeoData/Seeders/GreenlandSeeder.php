<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class GreenlandSeeder extends Seeder
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
    	return ['code' => 'GL', 'name' => 'Greenland', 'slug' => 'greenland'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 743905, 'country_code' => 'GL', 'name' => 'Avannaa', 'active' => 1, 'slug' => 'avannaa'],
            ['id' => 743907, 'country_code' => 'GL', 'name' => 'Kitaa', 'active' => 1, 'slug' => 'kitaa'],
            ['id' => 743923, 'country_code' => 'GL', 'name' => 'Tunu', 'active' => 1, 'slug' => 'tunu']
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
            ['id' => 37910, 'region_id' => 743905, 'country_code' => 'GL', 'name' => 'Qaanaaq', 'active' => 1, 'slug' => 'qaanaaq'],
            ['id' => 37911, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Nanortalik', 'active' => 1, 'slug' => 'nanortalik'],
            ['id' => 37912, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Qaqortoq', 'active' => 1, 'slug' => 'qaqortoq'],
            ['id' => 37913, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Narsaq', 'active' => 1, 'slug' => 'narsaq'],
            ['id' => 37914, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Ivittuut', 'active' => 1, 'slug' => 'ivittuut'],
            ['id' => 37915, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Paamiut', 'active' => 1, 'slug' => 'paamiut'],
            ['id' => 37916, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Nuuk', 'active' => 1, 'slug' => 'nuuk'],
            ['id' => 37917, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Maniitsoq', 'active' => 1, 'slug' => 'maniitsoq'],
            ['id' => 37918, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Sisimiut', 'active' => 1, 'slug' => 'sisimiut'],
            ['id' => 37919, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Kangaatsiaq', 'active' => 1, 'slug' => 'kangaatsiaq'],
            ['id' => 37920, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Aasiaat', 'active' => 1, 'slug' => 'aasiaat'],
            ['id' => 37921, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Qasigiannguit', 'active' => 1, 'slug' => 'qasigiannguit'],
            ['id' => 37922, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Ilulissat', 'active' => 1, 'slug' => 'ilulissat'],
            ['id' => 37923, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Qeqertarsuaq', 'active' => 1, 'slug' => 'qeqertarsuaq'],
            ['id' => 37924, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Uummannaq', 'active' => 1, 'slug' => 'uummannaq'],
            ['id' => 37925, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Upernavik', 'active' => 1, 'slug' => 'upernavik'],
            ['id' => 37926, 'region_id' => 743923, 'country_code' => 'GL', 'name' => 'Ammassalik.', 'active' => 1, 'slug' => 'ammassalik'],
            ['id' => 37927, 'region_id' => 743923, 'country_code' => 'GL', 'name' => 'Ittoqqortoormiit', 'active' => 1, 'slug' => 'ittoqqortoormiit']
    	];
    }
}
