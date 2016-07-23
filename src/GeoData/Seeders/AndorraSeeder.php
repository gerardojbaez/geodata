<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class AndorraSeeder extends Seeder
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
    	return ['code' => 'AD', 'name' => 'Andorra', 'slug' => 'andorra'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 746451, 'country_code' => 'AD', 'name' => 'Canillo', 'active' => 1, 'slug' => 'canillo'],
            ['id' => 746466, 'country_code' => 'AD', 'name' => 'Encamp', 'active' => 1, 'slug' => 'encamp'],
            ['id' => 746472, 'country_code' => 'AD', 'name' => 'Ordino', 'active' => 1, 'slug' => 'ordino'],
            ['id' => 746481, 'country_code' => 'AD', 'name' => 'La Massana', 'active' => 1, 'slug' => 'la-massana'],
            ['id' => 746489, 'country_code' => 'AD', 'name' => 'Andorra la Vella', 'active' => 1, 'slug' => 'andorra-la-vella'],
            ['id' => 746495, 'country_code' => 'AD', 'name' => 'Sant Julià de Lòria', 'active' => 1, 'slug' => 'sant-julia-de-loria'],
            ['id' => 746505, 'country_code' => 'AD', 'name' => 'Escaldes-Engordany', 'active' => 1, 'slug' => 'escaldes-engordany']
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
            ['id' => 40400, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'Canillo', 'active' => 1, 'slug' => 'canillo'],
            ['id' => 40401, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'Soldeu', 'active' => 1, 'slug' => 'soldeu'],
            ['id' => 40402, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'Bordes d\'Envalira', 'active' => 1, 'slug' => 'bordes-denvalira'],
            ['id' => 40403, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'El Tarter', 'active' => 1, 'slug' => 'el-tarter'],
            ['id' => 40404, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'Sant Pere', 'active' => 1, 'slug' => 'sant-pere'],
            ['id' => 40405, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'Ransol', 'active' => 1, 'slug' => 'ransol'],
            ['id' => 40406, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'Els Plans', 'active' => 1, 'slug' => 'els-plans'],
            ['id' => 40407, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'El Vilar', 'active' => 1, 'slug' => 'el-vilar'],
            ['id' => 40408, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'L\'Armiana', 'active' => 1, 'slug' => 'larmiana'],
            ['id' => 40409, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'L\'Aldosa', 'active' => 1, 'slug' => 'laldosa'],
            ['id' => 40410, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'El Forn', 'active' => 1, 'slug' => 'el-forn'],
            ['id' => 40411, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'Prats', 'active' => 1, 'slug' => 'prats'],
            ['id' => 40412, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'Meritxell', 'active' => 1, 'slug' => 'meritxell'],
            ['id' => 40413, 'region_id' => 746451, 'country_code' => 'AD', 'name' => 'Molleres', 'active' => 1, 'slug' => 'molleres'],
            ['id' => 40414, 'region_id' => 746466, 'country_code' => 'AD', 'name' => 'Encamp', 'active' => 1, 'slug' => 'encamp'],
            ['id' => 40415, 'region_id' => 746466, 'country_code' => 'AD', 'name' => 'El Tremat', 'active' => 1, 'slug' => 'el-tremat'],
            ['id' => 40416, 'region_id' => 746466, 'country_code' => 'AD', 'name' => 'La Mosquera', 'active' => 1, 'slug' => 'la-mosquera'],
            ['id' => 40417, 'region_id' => 746466, 'country_code' => 'AD', 'name' => 'Les Bons', 'active' => 1, 'slug' => 'les-bons'],
            ['id' => 40418, 'region_id' => 746466, 'country_code' => 'AD', 'name' => 'Vila', 'active' => 1, 'slug' => 'vila'],
            ['id' => 40419, 'region_id' => 746472, 'country_code' => 'AD', 'name' => 'Ordino', 'active' => 1, 'slug' => 'ordino'],
            ['id' => 40420, 'region_id' => 746472, 'country_code' => 'AD', 'name' => 'Segudet', 'active' => 1, 'slug' => 'segudet'],
            ['id' => 40421, 'region_id' => 746472, 'country_code' => 'AD', 'name' => 'Sornàs', 'active' => 1, 'slug' => 'sornas'],
            ['id' => 40422, 'region_id' => 746472, 'country_code' => 'AD', 'name' => 'Ansalonga', 'active' => 1, 'slug' => 'ansalonga'],
            ['id' => 40423, 'region_id' => 746472, 'country_code' => 'AD', 'name' => 'La Cortinada', 'active' => 1, 'slug' => 'la-cortinada'],
            ['id' => 40424, 'region_id' => 746472, 'country_code' => 'AD', 'name' => 'Arans', 'active' => 1, 'slug' => 'arans'],
            ['id' => 40425, 'region_id' => 746472, 'country_code' => 'AD', 'name' => 'Llorts', 'active' => 1, 'slug' => 'llorts'],
            ['id' => 40426, 'region_id' => 746472, 'country_code' => 'AD', 'name' => 'El Serrat', 'active' => 1, 'slug' => 'el-serrat'],
            ['id' => 40427, 'region_id' => 746481, 'country_code' => 'AD', 'name' => 'Pal', 'active' => 1, 'slug' => 'pal'],
            ['id' => 40428, 'region_id' => 746481, 'country_code' => 'AD', 'name' => 'Arinsal', 'active' => 1, 'slug' => 'arinsal'],
            ['id' => 40429, 'region_id' => 746481, 'country_code' => 'AD', 'name' => 'Erts', 'active' => 1, 'slug' => 'erts'],
            ['id' => 40430, 'region_id' => 746481, 'country_code' => 'AD', 'name' => 'Sispony', 'active' => 1, 'slug' => 'sispony'],
            ['id' => 40431, 'region_id' => 746481, 'country_code' => 'AD', 'name' => 'Anyós', 'active' => 1, 'slug' => 'anyos'],
            ['id' => 40432, 'region_id' => 746481, 'country_code' => 'AD', 'name' => 'L\'Aldosa', 'active' => 1, 'slug' => 'laldosa'],
            ['id' => 40433, 'region_id' => 746481, 'country_code' => 'AD', 'name' => 'La Massana', 'active' => 1, 'slug' => 'la-massana'],
            ['id' => 40434, 'region_id' => 746489, 'country_code' => 'AD', 'name' => 'El Pujol del Pui', 'active' => 1, 'slug' => 'el-pujol-del-pui'],
            ['id' => 40435, 'region_id' => 746489, 'country_code' => 'AD', 'name' => 'Escàs', 'active' => 1, 'slug' => 'escas'],
            ['id' => 40436, 'region_id' => 746489, 'country_code' => 'AD', 'name' => 'Els Plans', 'active' => 1, 'slug' => 'els-plans'],
            ['id' => 40437, 'region_id' => 746489, 'country_code' => 'AD', 'name' => 'El Mas de Ribafeta', 'active' => 1, 'slug' => 'el-mas-de-ribafeta'],
            ['id' => 40438, 'region_id' => 746489, 'country_code' => 'AD', 'name' => 'El Pui', 'active' => 1, 'slug' => 'el-pui'],
            ['id' => 40439, 'region_id' => 746495, 'country_code' => 'AD', 'name' => 'Bixessarri', 'active' => 1, 'slug' => 'bixessarri'],
            ['id' => 40440, 'region_id' => 746495, 'country_code' => 'AD', 'name' => 'Fontaneda', 'active' => 1, 'slug' => 'fontaneda'],
            ['id' => 40441, 'region_id' => 746495, 'country_code' => 'AD', 'name' => 'Auvinyà', 'active' => 1, 'slug' => 'auvinya'],
            ['id' => 40442, 'region_id' => 746495, 'country_code' => 'AD', 'name' => 'Juberri', 'active' => 1, 'slug' => 'juberri'],
            ['id' => 40443, 'region_id' => 746495, 'country_code' => 'AD', 'name' => 'Nagol', 'active' => 1, 'slug' => 'nagol'],
            ['id' => 40444, 'region_id' => 746495, 'country_code' => 'AD', 'name' => 'Certers', 'active' => 1, 'slug' => 'certers'],
            ['id' => 40445, 'region_id' => 746495, 'country_code' => 'AD', 'name' => 'Aixovall', 'active' => 1, 'slug' => 'aixovall'],
            ['id' => 40446, 'region_id' => 746495, 'country_code' => 'AD', 'name' => 'Aixirivall', 'active' => 1, 'slug' => 'aixirivall'],
            ['id' => 40447, 'region_id' => 746495, 'country_code' => 'AD', 'name' => 'Llumeneres', 'active' => 1, 'slug' => 'llumeneres'],
            ['id' => 40448, 'region_id' => 746505, 'country_code' => 'AD', 'name' => 'Escaldes', 'active' => 1, 'slug' => 'escaldes'],
            ['id' => 40449, 'region_id' => 746505, 'country_code' => 'AD', 'name' => 'Engordany', 'active' => 1, 'slug' => 'engordany'],
            ['id' => 40450, 'region_id' => 746505, 'country_code' => 'AD', 'name' => 'Vilars d\'Engordany', 'active' => 1, 'slug' => 'vilars-dengordany'],
            ['id' => 40451, 'region_id' => 746505, 'country_code' => 'AD', 'name' => 'Engolasters', 'active' => 1, 'slug' => 'engolasters'],
            ['id' => 40452, 'region_id' => 746505, 'country_code' => 'AD', 'name' => 'El Ferrer', 'active' => 1, 'slug' => 'el-ferrer']
    	];
    }
}
