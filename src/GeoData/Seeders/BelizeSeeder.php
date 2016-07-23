<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class BelizeSeeder extends Seeder
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
    	return ['code' => 'BZ', 'name' => 'Belize', 'slug' => 'belize'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 743997, 'country_code' => 'BZ', 'name' => 'Belice', 'active' => 1, 'slug' => 'belice'],
            ['id' => 744000, 'country_code' => 'BZ', 'name' => 'Cayo', 'active' => 1, 'slug' => 'cayo'],
            ['id' => 744019, 'country_code' => 'BZ', 'name' => 'Corozal', 'active' => 1, 'slug' => 'corozal'],
            ['id' => 744051, 'country_code' => 'BZ', 'name' => 'Orange Walk', 'active' => 1, 'slug' => 'orange-walk'],
            ['id' => 744082, 'country_code' => 'BZ', 'name' => 'Stann Creek', 'active' => 1, 'slug' => 'stann-creek'],
            ['id' => 744110, 'country_code' => 'BZ', 'name' => 'Toledo', 'active' => 1, 'slug' => 'toledo']
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
            ['id' => 37996, 'region_id' => 743997, 'country_code' => 'BZ', 'name' => 'Ambergris Caye', 'active' => 1, 'slug' => 'ambergris-caye'],
            ['id' => 37997, 'region_id' => 743997, 'country_code' => 'BZ', 'name' => 'Belice', 'active' => 1, 'slug' => 'belice'],
            ['id' => 37998, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Albaina', 'active' => 1, 'slug' => 'albaina'],
            ['id' => 37999, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Arenal', 'active' => 1, 'slug' => 'arenal'],
            ['id' => 38000, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Belmopan', 'active' => 1, 'slug' => 'belmopan'],
            ['id' => 38001, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Benque Viejo del Carmen', 'active' => 1, 'slug' => 'benque-viejo-del-carmen'],
            ['id' => 38002, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Buena Vista', 'active' => 1, 'slug' => 'buena-vista'],
            ['id' => 38003, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Calla Creek', 'active' => 1, 'slug' => 'calla-creek'],
            ['id' => 38004, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Chorro', 'active' => 1, 'slug' => 'chorro'],
            ['id' => 38005, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Dry Creek Bank', 'active' => 1, 'slug' => 'dry-creek-bank'],
            ['id' => 38006, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Garbutt\'s Falls', 'active' => 1, 'slug' => 'garbutts-falls'],
            ['id' => 38007, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Roaring Creek', 'active' => 1, 'slug' => 'roaring-creek'],
            ['id' => 38008, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'San Antonio Cayo', 'active' => 1, 'slug' => 'san-antonio-cayo'],
            ['id' => 38009, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'San Ignacio', 'active' => 1, 'slug' => 'san-ignacio'],
            ['id' => 38010, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'San José Succotz', 'active' => 1, 'slug' => 'san-jose-succotz'],
            ['id' => 38011, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Spanish Lookout', 'active' => 1, 'slug' => 'spanish-lookout'],
            ['id' => 38012, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'St. Margret\'s', 'active' => 1, 'slug' => 'st-margrets'],
            ['id' => 38013, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Toro', 'active' => 1, 'slug' => 'toro'],
            ['id' => 38014, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Vaca y Providencien', 'active' => 1, 'slug' => 'vaca-y-providencien'],
            ['id' => 38015, 'region_id' => 744000, 'country_code' => 'BZ', 'name' => 'Valley of Peace', 'active' => 1, 'slug' => 'valley-of-peace'],
            ['id' => 38016, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Benque Viejo', 'active' => 1, 'slug' => 'benque-viejo'],
            ['id' => 38017, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Calcutta', 'active' => 1, 'slug' => 'calcutta'],
            ['id' => 38018, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Campa Pita', 'active' => 1, 'slug' => 'campa-pita'],
            ['id' => 38019, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Chacan Chac Mol', 'active' => 1, 'slug' => 'chacan-chac-mol'],
            ['id' => 38020, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Chan Chen', 'active' => 1, 'slug' => 'chan-chen'],
            ['id' => 38021, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Chunch', 'active' => 1, 'slug' => 'chunch'],
            ['id' => 38022, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Chunox', 'active' => 1, 'slug' => 'chunox'],
            ['id' => 38023, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Cocos', 'active' => 1, 'slug' => 'cocos'],
            ['id' => 38024, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Consejo', 'active' => 1, 'slug' => 'consejo'],
            ['id' => 38025, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Copper Bank', 'active' => 1, 'slug' => 'copper-bank'],
            ['id' => 38026, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Corozal Town', 'active' => 1, 'slug' => 'corozal-town'],
            ['id' => 38027, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Corozalito', 'active' => 1, 'slug' => 'corozalito'],
            ['id' => 38028, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Cowpen', 'active' => 1, 'slug' => 'cowpen'],
            ['id' => 38029, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Estero', 'active' => 1, 'slug' => 'estero'],
            ['id' => 38030, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Laguna', 'active' => 1, 'slug' => 'laguna'],
            ['id' => 38031, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Libertad', 'active' => 1, 'slug' => 'libertad'],
            ['id' => 38032, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Little Belize', 'active' => 1, 'slug' => 'little-belize'],
            ['id' => 38033, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Louisville', 'active' => 1, 'slug' => 'louisville'],
            ['id' => 38034, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Paraiso', 'active' => 1, 'slug' => 'paraiso'],
            ['id' => 38035, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Patchacan', 'active' => 1, 'slug' => 'patchacan'],
            ['id' => 38036, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Progresso', 'active' => 1, 'slug' => 'progresso'],
            ['id' => 38037, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Puebla Nueva', 'active' => 1, 'slug' => 'puebla-nueva'],
            ['id' => 38038, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Ranchito', 'active' => 1, 'slug' => 'ranchito'],
            ['id' => 38039, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Remate', 'active' => 1, 'slug' => 'remate'],
            ['id' => 38040, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Saltillo', 'active' => 1, 'slug' => 'saltillo'],
            ['id' => 38041, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'San Joaquín', 'active' => 1, 'slug' => 'san-joaquin'],
            ['id' => 38042, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Sarteneja', 'active' => 1, 'slug' => 'sarteneja'],
            ['id' => 38043, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Shipstern', 'active' => 1, 'slug' => 'shipstern'],
            ['id' => 38044, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Tacistal', 'active' => 1, 'slug' => 'tacistal'],
            ['id' => 38045, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Xaibe', 'active' => 1, 'slug' => 'xaibe'],
            ['id' => 38046, 'region_id' => 744019, 'country_code' => 'BZ', 'name' => 'Xcanluum', 'active' => 1, 'slug' => 'xcanluum'],
            ['id' => 38047, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'August Pine Ridge', 'active' => 1, 'slug' => 'august-pine-ridge'],
            ['id' => 38048, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Blue Creek Village', 'active' => 1, 'slug' => 'blue-creek-village'],
            ['id' => 38049, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Carmelita', 'active' => 1, 'slug' => 'carmelita'],
            ['id' => 38050, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Esperanza', 'active' => 1, 'slug' => 'esperanza'],
            ['id' => 38051, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Guinea Grass Town', 'active' => 1, 'slug' => 'guinea-grass-town'],
            ['id' => 38052, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Indian Church', 'active' => 1, 'slug' => 'indian-church'],
            ['id' => 38053, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Little Bermudian Landing', 'active' => 1, 'slug' => 'little-bermudian-landing'],
            ['id' => 38054, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Orange Walk Town', 'active' => 1, 'slug' => 'orange-walk-town'],
            ['id' => 38055, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Piedregal', 'active' => 1, 'slug' => 'piedregal'],
            ['id' => 38056, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Ramonal', 'active' => 1, 'slug' => 'ramonal'],
            ['id' => 38057, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Rancho', 'active' => 1, 'slug' => 'rancho'],
            ['id' => 38058, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Rejolla', 'active' => 1, 'slug' => 'rejolla'],
            ['id' => 38059, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'San Antonio', 'active' => 1, 'slug' => 'san-antonio'],
            ['id' => 38060, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'San Carlos', 'active' => 1, 'slug' => 'san-carlos'],
            ['id' => 38061, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'San Estevan', 'active' => 1, 'slug' => 'san-estevan'],
            ['id' => 38062, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'San Felipe', 'active' => 1, 'slug' => 'san-felipe'],
            ['id' => 38063, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'San José', 'active' => 1, 'slug' => 'san-jose'],
            ['id' => 38064, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'San Juan Bank', 'active' => 1, 'slug' => 'san-juan-bank'],
            ['id' => 38065, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'San Lazaro', 'active' => 1, 'slug' => 'san-lazaro'],
            ['id' => 38066, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'San Pablo', 'active' => 1, 'slug' => 'san-pablo'],
            ['id' => 38067, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'San Roman', 'active' => 1, 'slug' => 'san-roman'],
            ['id' => 38068, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Santa Cruz', 'active' => 1, 'slug' => 'santa-cruz'],
            ['id' => 38069, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Shipyard', 'active' => 1, 'slug' => 'shipyard'],
            ['id' => 38070, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Trial Farm', 'active' => 1, 'slug' => 'trial-farm'],
            ['id' => 38071, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Trinidad', 'active' => 1, 'slug' => 'trinidad'],
            ['id' => 38072, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Vaqueros', 'active' => 1, 'slug' => 'vaqueros'],
            ['id' => 38073, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Wamil', 'active' => 1, 'slug' => 'wamil'],
            ['id' => 38074, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Warrie Camp', 'active' => 1, 'slug' => 'warrie-camp'],
            ['id' => 38075, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Xcanha', 'active' => 1, 'slug' => 'xcanha'],
            ['id' => 38076, 'region_id' => 744051, 'country_code' => 'BZ', 'name' => 'Yo Creek', 'active' => 1, 'slug' => 'yo-creek'],
            ['id' => 38077, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Alta Vista', 'active' => 1, 'slug' => 'alta-vista'],
            ['id' => 38078, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Big Creek', 'active' => 1, 'slug' => 'big-creek'],
            ['id' => 38079, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Commerce Bight', 'active' => 1, 'slug' => 'commerce-bight'],
            ['id' => 38080, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Dancing Pool', 'active' => 1, 'slug' => 'dancing-pool'],
            ['id' => 38081, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Dangriga', 'active' => 1, 'slug' => 'dangriga'],
            ['id' => 38082, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Garifuna', 'active' => 1, 'slug' => 'garifuna'],
            ['id' => 38083, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Georgetown', 'active' => 1, 'slug' => 'georgetown'],
            ['id' => 38084, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Guana Church Bank', 'active' => 1, 'slug' => 'guana-church-bank'],
            ['id' => 38085, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'High Sand', 'active' => 1, 'slug' => 'high-sand'],
            ['id' => 38086, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Hopkins', 'active' => 1, 'slug' => 'hopkins'],
            ['id' => 38087, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Independence And Mango Creek', 'active' => 1, 'slug' => 'independence-and-mango-creek'],
            ['id' => 38088, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Kendal', 'active' => 1, 'slug' => 'kendal'],
            ['id' => 38089, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Lagarto Bank', 'active' => 1, 'slug' => 'lagarto-bank'],
            ['id' => 38090, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Maya Mopan', 'active' => 1, 'slug' => 'maya-mopan'],
            ['id' => 38091, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Middle Bank', 'active' => 1, 'slug' => 'middle-bank'],
            ['id' => 38092, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Middlesex', 'active' => 1, 'slug' => 'middlesex'],
            ['id' => 38093, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Mullins River', 'active' => 1, 'slug' => 'mullins-river'],
            ['id' => 38094, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'New Home', 'active' => 1, 'slug' => 'new-home'],
            ['id' => 38095, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Placencia', 'active' => 1, 'slug' => 'placencia'],
            ['id' => 38096, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Pomona', 'active' => 1, 'slug' => 'pomona'],
            ['id' => 38097, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Quarry Hill', 'active' => 1, 'slug' => 'quarry-hill'],
            ['id' => 38098, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Rancho Grande', 'active' => 1, 'slug' => 'rancho-grande'],
            ['id' => 38099, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Red Bank', 'active' => 1, 'slug' => 'red-bank'],
            ['id' => 38100, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Regalia', 'active' => 1, 'slug' => 'regalia'],
            ['id' => 38101, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Sarawina', 'active' => 1, 'slug' => 'sarawina'],
            ['id' => 38102, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Silver Creek Camp', 'active' => 1, 'slug' => 'silver-creek-camp'],
            ['id' => 38103, 'region_id' => 744082, 'country_code' => 'BZ', 'name' => 'Sittee', 'active' => 1, 'slug' => 'sittee'],
            ['id' => 38104, 'region_id' => 744110, 'country_code' => 'BZ', 'name' => 'Punta Gorda', 'active' => 1, 'slug' => 'punta-gorda']
    	];
    }
}
