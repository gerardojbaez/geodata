<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class AlbaniaSeeder extends Seeder
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
    	return ['code' => 'AL', 'name' => 'Albania', 'slug' => 'albania'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 781457, 'country_code' => 'AL', 'name' => 'Berat', 'active' => 1, 'slug' => 'berat'],
            ['id' => 781461, 'country_code' => 'AL', 'name' => 'Dibër', 'active' => 1, 'slug' => 'diber'],
            ['id' => 781465, 'country_code' => 'AL', 'name' => 'Durrës', 'active' => 1, 'slug' => 'durres'],
            ['id' => 781468, 'country_code' => 'AL', 'name' => 'Elbasan', 'active' => 1, 'slug' => 'elbasan'],
            ['id' => 781473, 'country_code' => 'AL', 'name' => 'Fier', 'active' => 1, 'slug' => 'fier'],
            ['id' => 781477, 'country_code' => 'AL', 'name' => 'Gjirokastër', 'active' => 1, 'slug' => 'gjirokaster'],
            ['id' => 781481, 'country_code' => 'AL', 'name' => 'Korçë', 'active' => 1, 'slug' => 'korce'],
            ['id' => 781486, 'country_code' => 'AL', 'name' => 'Kukës', 'active' => 1, 'slug' => 'kukes'],
            ['id' => 781490, 'country_code' => 'AL', 'name' => 'Lezhë', 'active' => 1, 'slug' => 'lezhe'],
            ['id' => 781494, 'country_code' => 'AL', 'name' => 'Shkodër', 'active' => 1, 'slug' => 'shkoder'],
            ['id' => 781498, 'country_code' => 'AL', 'name' => 'Tiranë', 'active' => 1, 'slug' => 'tirane'],
            ['id' => 781501, 'country_code' => 'AL', 'name' => 'Vlorë', 'active' => 1, 'slug' => 'vlore']
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
            ['id' => 44758, 'region_id' => 781457, 'country_code' => 'AL', 'name' => 'Berat', 'active' => 1, 'slug' => 'berat'],
            ['id' => 44759, 'region_id' => 781457, 'country_code' => 'AL', 'name' => 'Kuçovë', 'active' => 1, 'slug' => 'kucove'],
            ['id' => 44760, 'region_id' => 781457, 'country_code' => 'AL', 'name' => 'Skrapar', 'active' => 1, 'slug' => 'skrapar'],
            ['id' => 44761, 'region_id' => 781461, 'country_code' => 'AL', 'name' => 'Bulqizë', 'active' => 1, 'slug' => 'bulqize'],
            ['id' => 44762, 'region_id' => 781461, 'country_code' => 'AL', 'name' => 'Dibër', 'active' => 1, 'slug' => 'diber'],
            ['id' => 44763, 'region_id' => 781461, 'country_code' => 'AL', 'name' => 'Mat', 'active' => 1, 'slug' => 'mat'],
            ['id' => 44764, 'region_id' => 781465, 'country_code' => 'AL', 'name' => 'Durrës', 'active' => 1, 'slug' => 'durres'],
            ['id' => 44765, 'region_id' => 781465, 'country_code' => 'AL', 'name' => 'Krujë', 'active' => 1, 'slug' => 'kruje'],
            ['id' => 44766, 'region_id' => 781468, 'country_code' => 'AL', 'name' => 'Elbasan', 'active' => 1, 'slug' => 'elbasan'],
            ['id' => 44767, 'region_id' => 781468, 'country_code' => 'AL', 'name' => 'Gramsh', 'active' => 1, 'slug' => 'gramsh'],
            ['id' => 44768, 'region_id' => 781468, 'country_code' => 'AL', 'name' => 'Librazhd', 'active' => 1, 'slug' => 'librazhd'],
            ['id' => 44769, 'region_id' => 781468, 'country_code' => 'AL', 'name' => 'Peqin', 'active' => 1, 'slug' => 'peqin'],
            ['id' => 44770, 'region_id' => 781473, 'country_code' => 'AL', 'name' => 'Fier', 'active' => 1, 'slug' => 'fier'],
            ['id' => 44771, 'region_id' => 781473, 'country_code' => 'AL', 'name' => 'Lushnjë', 'active' => 1, 'slug' => 'lushnje'],
            ['id' => 44772, 'region_id' => 781473, 'country_code' => 'AL', 'name' => 'Mallakastër', 'active' => 1, 'slug' => 'mallakaster'],
            ['id' => 44773, 'region_id' => 781477, 'country_code' => 'AL', 'name' => 'Gjirokastër', 'active' => 1, 'slug' => 'gjirokaster'],
            ['id' => 44774, 'region_id' => 781477, 'country_code' => 'AL', 'name' => 'Përmet', 'active' => 1, 'slug' => 'permet'],
            ['id' => 44775, 'region_id' => 781477, 'country_code' => 'AL', 'name' => 'Tepelenë', 'active' => 1, 'slug' => 'tepelene'],
            ['id' => 44776, 'region_id' => 781481, 'country_code' => 'AL', 'name' => 'Devoll', 'active' => 1, 'slug' => 'devoll'],
            ['id' => 44777, 'region_id' => 781481, 'country_code' => 'AL', 'name' => 'Kolonjë', 'active' => 1, 'slug' => 'kolonje'],
            ['id' => 44778, 'region_id' => 781481, 'country_code' => 'AL', 'name' => 'Korçë', 'active' => 1, 'slug' => 'korce'],
            ['id' => 44779, 'region_id' => 781481, 'country_code' => 'AL', 'name' => 'Pogradec', 'active' => 1, 'slug' => 'pogradec'],
            ['id' => 44780, 'region_id' => 781486, 'country_code' => 'AL', 'name' => 'Has', 'active' => 1, 'slug' => 'has'],
            ['id' => 44781, 'region_id' => 781486, 'country_code' => 'AL', 'name' => 'Kukës', 'active' => 1, 'slug' => 'kukes'],
            ['id' => 44782, 'region_id' => 781486, 'country_code' => 'AL', 'name' => 'Tropojë', 'active' => 1, 'slug' => 'tropoje'],
            ['id' => 44783, 'region_id' => 781490, 'country_code' => 'AL', 'name' => 'Kurbin', 'active' => 1, 'slug' => 'kurbin'],
            ['id' => 44784, 'region_id' => 781490, 'country_code' => 'AL', 'name' => 'Lezhë', 'active' => 1, 'slug' => 'lezhe'],
            ['id' => 44785, 'region_id' => 781490, 'country_code' => 'AL', 'name' => 'Mirditë', 'active' => 1, 'slug' => 'mirdite'],
            ['id' => 44786, 'region_id' => 781494, 'country_code' => 'AL', 'name' => 'Malësi E Madhe', 'active' => 1, 'slug' => 'malesi-e-madhe'],
            ['id' => 44787, 'region_id' => 781494, 'country_code' => 'AL', 'name' => 'Pukë', 'active' => 1, 'slug' => 'puke'],
            ['id' => 44788, 'region_id' => 781494, 'country_code' => 'AL', 'name' => 'Shkodër', 'active' => 1, 'slug' => 'shkoder'],
            ['id' => 44789, 'region_id' => 781498, 'country_code' => 'AL', 'name' => 'Kavajë', 'active' => 1, 'slug' => 'kavaje'],
            ['id' => 44790, 'region_id' => 781498, 'country_code' => 'AL', 'name' => 'Tiranë', 'active' => 1, 'slug' => 'tirane'],
            ['id' => 44791, 'region_id' => 781501, 'country_code' => 'AL', 'name' => 'Delvinë', 'active' => 1, 'slug' => 'delvine'],
            ['id' => 44792, 'region_id' => 781501, 'country_code' => 'AL', 'name' => 'Sarandë', 'active' => 1, 'slug' => 'sarande'],
            ['id' => 44793, 'region_id' => 781501, 'country_code' => 'AL', 'name' => 'Vlorë', 'active' => 1, 'slug' => 'vlore']
    	];
    }
}
