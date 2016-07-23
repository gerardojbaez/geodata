<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class PapuaNewGuineaSeeder extends Seeder
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
    	return ['code' => 'PG', 'name' => 'Papua New Guinea', 'slug' => 'papua-new-guinea'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 778641, 'country_code' => 'PG', 'name' => 'Central', 'active' => 1, 'slug' => 'central'],
            ['id' => 778648, 'country_code' => 'PG', 'name' => 'Simbu', 'active' => 1, 'slug' => 'simbu'],
            ['id' => 778650, 'country_code' => 'PG', 'name' => 'Highlands Orientales', 'active' => 1, 'slug' => 'highlands-orientales'],
            ['id' => 778653, 'country_code' => 'PG', 'name' => 'Nueva Bretaña del Este', 'active' => 1, 'slug' => 'nueva-bretana-del-este'],
            ['id' => 778656, 'country_code' => 'PG', 'name' => 'Sepik del Este', 'active' => 1, 'slug' => 'sepik-del-este'],
            ['id' => 778664, 'country_code' => 'PG', 'name' => 'Enga', 'active' => 1, 'slug' => 'enga'],
            ['id' => 778668, 'country_code' => 'PG', 'name' => 'Golfo', 'active' => 1, 'slug' => 'golfo'],
            ['id' => 778672, 'country_code' => 'PG', 'name' => 'Madang', 'active' => 1, 'slug' => 'madang'],
            ['id' => 778676, 'country_code' => 'PG', 'name' => 'Manus', 'active' => 1, 'slug' => 'manus'],
            ['id' => 778679, 'country_code' => 'PG', 'name' => 'Milne Bay', 'active' => 1, 'slug' => 'milne-bay'],
            ['id' => 778684, 'country_code' => 'PG', 'name' => 'Morobe', 'active' => 1, 'slug' => 'morobe'],
            ['id' => 778690, 'country_code' => 'PG', 'name' => 'Nueva Irlanda', 'active' => 1, 'slug' => 'nueva-irlanda'],
            ['id' => 778694, 'country_code' => 'PG', 'name' => 'Oro', 'active' => 1, 'slug' => 'oro'],
            ['id' => 778697, 'country_code' => 'PG', 'name' => 'Bougainville', 'active' => 1, 'slug' => 'bougainville'],
            ['id' => 778699, 'country_code' => 'PG', 'name' => 'Highlands del Sur', 'active' => 1, 'slug' => 'highlands-del-sur'],
            ['id' => 778702, 'country_code' => 'PG', 'name' => 'Occidental', 'active' => 1, 'slug' => 'occidental'],
            ['id' => 778707, 'country_code' => 'PG', 'name' => 'Highlands Occidentales', 'active' => 1, 'slug' => 'highlands-occidentales'],
            ['id' => 778709, 'country_code' => 'PG', 'name' => 'Sandaun', 'active' => 1, 'slug' => 'sandaun']
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
            ['id' => 42525, 'region_id' => 778641, 'country_code' => 'PG', 'name' => 'Port Moresby', 'active' => 1, 'slug' => 'port-moresby'],
            ['id' => 42526, 'region_id' => 778641, 'country_code' => 'PG', 'name' => 'Konedobu', 'active' => 1, 'slug' => 'konedobu'],
            ['id' => 42527, 'region_id' => 778641, 'country_code' => 'PG', 'name' => 'Soqeri', 'active' => 1, 'slug' => 'soqeri'],
            ['id' => 42528, 'region_id' => 778641, 'country_code' => 'PG', 'name' => 'Taurama', 'active' => 1, 'slug' => 'taurama'],
            ['id' => 42529, 'region_id' => 778641, 'country_code' => 'PG', 'name' => 'Woitape', 'active' => 1, 'slug' => 'woitape'],
            ['id' => 42530, 'region_id' => 778641, 'country_code' => 'PG', 'name' => 'Yule Island', 'active' => 1, 'slug' => 'yule-island'],
            ['id' => 42531, 'region_id' => 778648, 'country_code' => 'PG', 'name' => 'Kundiawa', 'active' => 1, 'slug' => 'kundiawa'],
            ['id' => 42532, 'region_id' => 778650, 'country_code' => 'PG', 'name' => 'Goroka', 'active' => 1, 'slug' => 'goroka'],
            ['id' => 42533, 'region_id' => 778650, 'country_code' => 'PG', 'name' => 'Kainantu', 'active' => 1, 'slug' => 'kainantu'],
            ['id' => 42535, 'region_id' => 778653, 'country_code' => 'PG', 'name' => 'Kokopo', 'active' => 1, 'slug' => 'kokopo'],
            ['id' => 42534, 'region_id' => 778653, 'country_code' => 'PG', 'name' => 'Rabaul', 'active' => 1, 'slug' => 'rabaul'],
            ['id' => 42536, 'region_id' => 778656, 'country_code' => 'PG', 'name' => 'Angoram', 'active' => 1, 'slug' => 'angoram'],
            ['id' => 42537, 'region_id' => 778656, 'country_code' => 'PG', 'name' => 'Kaminimbit', 'active' => 1, 'slug' => 'kaminimbit'],
            ['id' => 42538, 'region_id' => 778656, 'country_code' => 'PG', 'name' => 'Karawari', 'active' => 1, 'slug' => 'karawari'],
            ['id' => 42539, 'region_id' => 778656, 'country_code' => 'PG', 'name' => 'Timbunke', 'active' => 1, 'slug' => 'timbunke'],
            ['id' => 42540, 'region_id' => 778656, 'country_code' => 'PG', 'name' => 'Wewak', 'active' => 1, 'slug' => 'wewak'],
            ['id' => 42541, 'region_id' => 778656, 'country_code' => 'PG', 'name' => 'Aitape', 'active' => 1, 'slug' => 'aitape'],
            ['id' => 42542, 'region_id' => 778656, 'country_code' => 'PG', 'name' => 'Ambunti', 'active' => 1, 'slug' => 'ambunti'],
            ['id' => 42543, 'region_id' => 778664, 'country_code' => 'PG', 'name' => 'Laiagam', 'active' => 1, 'slug' => 'laiagam'],
            ['id' => 42544, 'region_id' => 778664, 'country_code' => 'PG', 'name' => 'Porgera', 'active' => 1, 'slug' => 'porgera'],
            ['id' => 42545, 'region_id' => 778664, 'country_code' => 'PG', 'name' => 'Wabag', 'active' => 1, 'slug' => 'wabag'],
            ['id' => 42546, 'region_id' => 778668, 'country_code' => 'PG', 'name' => 'Kerema', 'active' => 1, 'slug' => 'kerema'],
            ['id' => 42547, 'region_id' => 778668, 'country_code' => 'PG', 'name' => 'Kikori', 'active' => 1, 'slug' => 'kikori'],
            ['id' => 42548, 'region_id' => 778668, 'country_code' => 'PG', 'name' => 'Malalaua', 'active' => 1, 'slug' => 'malalaua'],
            ['id' => 42549, 'region_id' => 778672, 'country_code' => 'PG', 'name' => 'Madang', 'active' => 1, 'slug' => 'madang'],
            ['id' => 42550, 'region_id' => 778672, 'country_code' => 'PG', 'name' => 'Gusap', 'active' => 1, 'slug' => 'gusap'],
            ['id' => 42551, 'region_id' => 778672, 'country_code' => 'PG', 'name' => 'Finschhafen', 'active' => 1, 'slug' => 'finschhafen'],
            ['id' => 42552, 'region_id' => 778676, 'country_code' => 'PG', 'name' => 'Lorengau', 'active' => 1, 'slug' => 'lorengau'],
            ['id' => 42553, 'region_id' => 778676, 'country_code' => 'PG', 'name' => 'Manus', 'active' => 1, 'slug' => 'manus'],
            ['id' => 42554, 'region_id' => 778679, 'country_code' => 'PG', 'name' => 'Alotau', 'active' => 1, 'slug' => 'alotau'],
            ['id' => 42555, 'region_id' => 778679, 'country_code' => 'PG', 'name' => 'Esa\'ala', 'active' => 1, 'slug' => 'esaala'],
            ['id' => 42556, 'region_id' => 778679, 'country_code' => 'PG', 'name' => 'Losuia', 'active' => 1, 'slug' => 'losuia'],
            ['id' => 42557, 'region_id' => 778679, 'country_code' => 'PG', 'name' => 'Samarai', 'active' => 1, 'slug' => 'samarai'],
            ['id' => 42558, 'region_id' => 778684, 'country_code' => 'PG', 'name' => 'Lae', 'active' => 1, 'slug' => 'lae'],
            ['id' => 42559, 'region_id' => 778684, 'country_code' => 'PG', 'name' => 'Bulolo', 'active' => 1, 'slug' => 'bulolo'],
            ['id' => 42560, 'region_id' => 778684, 'country_code' => 'PG', 'name' => 'Finschafen', 'active' => 1, 'slug' => 'finschafen'],
            ['id' => 42561, 'region_id' => 778684, 'country_code' => 'PG', 'name' => 'Sialum', 'active' => 1, 'slug' => 'sialum'],
            ['id' => 42562, 'region_id' => 778684, 'country_code' => 'PG', 'name' => 'Wau', 'active' => 1, 'slug' => 'wau'],
            ['id' => 42563, 'region_id' => 778690, 'country_code' => 'PG', 'name' => 'Kavieng', 'active' => 1, 'slug' => 'kavieng'],
            ['id' => 42564, 'region_id' => 778690, 'country_code' => 'PG', 'name' => 'Lihir Island', 'active' => 1, 'slug' => 'lihir-island'],
            ['id' => 42565, 'region_id' => 778690, 'country_code' => 'PG', 'name' => 'Namatanai', 'active' => 1, 'slug' => 'namatanai'],
            ['id' => 42567, 'region_id' => 778694, 'country_code' => 'PG', 'name' => 'Kokoda', 'active' => 1, 'slug' => 'kokoda'],
            ['id' => 42566, 'region_id' => 778694, 'country_code' => 'PG', 'name' => 'Popondetta', 'active' => 1, 'slug' => 'popondetta'],
            ['id' => 42568, 'region_id' => 778697, 'country_code' => 'PG', 'name' => 'Arawa', 'active' => 1, 'slug' => 'arawa'],
            ['id' => 42569, 'region_id' => 778699, 'country_code' => 'PG', 'name' => 'Mendi', 'active' => 1, 'slug' => 'mendi'],
            ['id' => 42570, 'region_id' => 778699, 'country_code' => 'PG', 'name' => 'Tari', 'active' => 1, 'slug' => 'tari'],
            ['id' => 42571, 'region_id' => 778702, 'country_code' => 'PG', 'name' => 'Daru', 'active' => 1, 'slug' => 'daru'],
            ['id' => 42572, 'region_id' => 778702, 'country_code' => 'PG', 'name' => 'Bensbach', 'active' => 1, 'slug' => 'bensbach'],
            ['id' => 42573, 'region_id' => 778702, 'country_code' => 'PG', 'name' => 'Minj', 'active' => 1, 'slug' => 'minj'],
            ['id' => 42574, 'region_id' => 778702, 'country_code' => 'PG', 'name' => 'Mount Hagen', 'active' => 1, 'slug' => 'mount-hagen'],
            ['id' => 42575, 'region_id' => 778707, 'country_code' => 'PG', 'name' => 'Mount Hagen', 'active' => 1, 'slug' => 'mount-hagen'],
            ['id' => 42576, 'region_id' => 778709, 'country_code' => 'PG', 'name' => 'Vanimo', 'active' => 1, 'slug' => 'vanimo']
    	];
    }
}
