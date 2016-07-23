<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class CostaRicaSeeder extends Seeder
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
    	return ['code' => 'CR', 'name' => 'Costa Rica', 'slug' => 'costa-rica'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 710200, 'country_code' => 'CR', 'name' => 'Alajuela', 'active' => 1, 'slug' => 'alajuela'],
            ['id' => 710216, 'country_code' => 'CR', 'name' => 'Cartago', 'active' => 1, 'slug' => 'cartago'],
            ['id' => 710225, 'country_code' => 'CR', 'name' => 'Guanacaste', 'active' => 1, 'slug' => 'guanacaste'],
            ['id' => 710237, 'country_code' => 'CR', 'name' => 'Heredia', 'active' => 1, 'slug' => 'heredia'],
            ['id' => 710248, 'country_code' => 'CR', 'name' => 'Limón', 'active' => 1, 'slug' => 'limon'],
            ['id' => 710255, 'country_code' => 'CR', 'name' => 'Puntarenas', 'active' => 1, 'slug' => 'puntarenas'],
            ['id' => 710268, 'country_code' => 'CR', 'name' => 'San José', 'active' => 1, 'slug' => 'san-jose']
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
            ['id' => 24270, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Alfaro Ruiz', 'active' => 1, 'slug' => 'alfaro-ruiz'],
            ['id' => 24271, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Atenas', 'active' => 1, 'slug' => 'atenas'],
            ['id' => 24272, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Central Alajuela', 'active' => 1, 'slug' => 'central-alajuela'],
            ['id' => 24273, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Grecia', 'active' => 1, 'slug' => 'grecia'],
            ['id' => 24274, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Guatuso', 'active' => 1, 'slug' => 'guatuso'],
            ['id' => 24275, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Los Chiles', 'active' => 1, 'slug' => 'los-chiles'],
            ['id' => 24276, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Naranjo', 'active' => 1, 'slug' => 'naranjo'],
            ['id' => 24277, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Orotina', 'active' => 1, 'slug' => 'orotina'],
            ['id' => 24278, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Palmares', 'active' => 1, 'slug' => 'palmares'],
            ['id' => 24279, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Poás', 'active' => 1, 'slug' => 'poas'],
            ['id' => 24280, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'San Carlos', 'active' => 1, 'slug' => 'san-carlos'],
            ['id' => 24281, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'San Mateo', 'active' => 1, 'slug' => 'san-mateo'],
            ['id' => 24282, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'San Ramón', 'active' => 1, 'slug' => 'san-ramon'],
            ['id' => 24283, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Upala', 'active' => 1, 'slug' => 'upala'],
            ['id' => 24284, 'region_id' => 710200, 'country_code' => 'CR', 'name' => 'Valverde Vega', 'active' => 1, 'slug' => 'valverde-vega'],
            ['id' => 24285, 'region_id' => 710216, 'country_code' => 'CR', 'name' => 'Alvarado', 'active' => 1, 'slug' => 'alvarado'],
            ['id' => 24286, 'region_id' => 710216, 'country_code' => 'CR', 'name' => 'Cartago', 'active' => 1, 'slug' => 'cartago'],
            ['id' => 24287, 'region_id' => 710216, 'country_code' => 'CR', 'name' => 'El Guarco', 'active' => 1, 'slug' => 'el-guarco'],
            ['id' => 24288, 'region_id' => 710216, 'country_code' => 'CR', 'name' => 'Jiménez', 'active' => 1, 'slug' => 'jimenez'],
            ['id' => 24289, 'region_id' => 710216, 'country_code' => 'CR', 'name' => 'La Unión', 'active' => 1, 'slug' => 'la-union'],
            ['id' => 24290, 'region_id' => 710216, 'country_code' => 'CR', 'name' => 'Oreamuno', 'active' => 1, 'slug' => 'oreamuno'],
            ['id' => 24291, 'region_id' => 710216, 'country_code' => 'CR', 'name' => 'Paraíso', 'active' => 1, 'slug' => 'paraiso'],
            ['id' => 24292, 'region_id' => 710216, 'country_code' => 'CR', 'name' => 'Turrialba', 'active' => 1, 'slug' => 'turrialba'],
            ['id' => 24293, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'Abangares', 'active' => 1, 'slug' => 'abangares'],
            ['id' => 24294, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'Bagaces', 'active' => 1, 'slug' => 'bagaces'],
            ['id' => 24295, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'Cañas', 'active' => 1, 'slug' => 'canas'],
            ['id' => 24296, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'Carrillo', 'active' => 1, 'slug' => 'carrillo'],
            ['id' => 24297, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'Hojancha', 'active' => 1, 'slug' => 'hojancha'],
            ['id' => 24298, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'La Cruz', 'active' => 1, 'slug' => 'la-cruz'],
            ['id' => 24299, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'Liberia', 'active' => 1, 'slug' => 'liberia'],
            ['id' => 24300, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'Nandayure', 'active' => 1, 'slug' => 'nandayure'],
            ['id' => 24301, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'Nicoya', 'active' => 1, 'slug' => 'nicoya'],
            ['id' => 24302, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'Santa Cruz', 'active' => 1, 'slug' => 'santa-cruz'],
            ['id' => 24303, 'region_id' => 710225, 'country_code' => 'CR', 'name' => 'Tilarán', 'active' => 1, 'slug' => 'tilaran'],
            ['id' => 24304, 'region_id' => 710237, 'country_code' => 'CR', 'name' => 'Barba', 'active' => 1, 'slug' => 'barba'],
            ['id' => 24305, 'region_id' => 710237, 'country_code' => 'CR', 'name' => 'Belen', 'active' => 1, 'slug' => 'belen'],
            ['id' => 24306, 'region_id' => 710237, 'country_code' => 'CR', 'name' => 'Central Heredia', 'active' => 1, 'slug' => 'central-heredia'],
            ['id' => 24307, 'region_id' => 710237, 'country_code' => 'CR', 'name' => 'Flores', 'active' => 1, 'slug' => 'flores'],
            ['id' => 24308, 'region_id' => 710237, 'country_code' => 'CR', 'name' => 'San Isidro', 'active' => 1, 'slug' => 'san-isidro'],
            ['id' => 24309, 'region_id' => 710237, 'country_code' => 'CR', 'name' => 'San Pablo', 'active' => 1, 'slug' => 'san-pablo'],
            ['id' => 24310, 'region_id' => 710237, 'country_code' => 'CR', 'name' => 'Santa Barbara', 'active' => 1, 'slug' => 'santa-barbara'],
            ['id' => 24311, 'region_id' => 710237, 'country_code' => 'CR', 'name' => 'Santo Domingo', 'active' => 1, 'slug' => 'santo-domingo'],
            ['id' => 24312, 'region_id' => 710237, 'country_code' => 'CR', 'name' => 'Saraqpiquí', 'active' => 1, 'slug' => 'saraqpiqui'],
            ['id' => 24313, 'region_id' => 710248, 'country_code' => 'CR', 'name' => 'Central Limón', 'active' => 1, 'slug' => 'central-limon'],
            ['id' => 24314, 'region_id' => 710248, 'country_code' => 'CR', 'name' => 'Guácimo', 'active' => 1, 'slug' => 'guacimo'],
            ['id' => 24315, 'region_id' => 710248, 'country_code' => 'CR', 'name' => 'Matina', 'active' => 1, 'slug' => 'matina'],
            ['id' => 24316, 'region_id' => 710248, 'country_code' => 'CR', 'name' => 'Pococí', 'active' => 1, 'slug' => 'pococi'],
            ['id' => 24317, 'region_id' => 710248, 'country_code' => 'CR', 'name' => 'Siquirres', 'active' => 1, 'slug' => 'siquirres'],
            ['id' => 24318, 'region_id' => 710248, 'country_code' => 'CR', 'name' => 'Talamanca', 'active' => 1, 'slug' => 'talamanca'],
            ['id' => 24319, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Aguirre', 'active' => 1, 'slug' => 'aguirre'],
            ['id' => 24320, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Buenos Aires', 'active' => 1, 'slug' => 'buenos-aires'],
            ['id' => 24321, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Central Puntarenas', 'active' => 1, 'slug' => 'central-puntarenas'],
            ['id' => 24322, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Corredores', 'active' => 1, 'slug' => 'corredores'],
            ['id' => 24323, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Coto Brus', 'active' => 1, 'slug' => 'coto-brus'],
            ['id' => 24324, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Esparza', 'active' => 1, 'slug' => 'esparza'],
            ['id' => 24325, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Garabito', 'active' => 1, 'slug' => 'garabito'],
            ['id' => 24326, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Golfito', 'active' => 1, 'slug' => 'golfito'],
            ['id' => 24327, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Montes de Oro', 'active' => 1, 'slug' => 'montes-de-oro'],
            ['id' => 24328, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Osa', 'active' => 1, 'slug' => 'osa'],
            ['id' => 24329, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Parrita', 'active' => 1, 'slug' => 'parrita'],
            ['id' => 24330, 'region_id' => 710255, 'country_code' => 'CR', 'name' => 'Puntarenas', 'active' => 1, 'slug' => 'puntarenas'],
            ['id' => 24331, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Acosta', 'active' => 1, 'slug' => 'acosta'],
            ['id' => 24332, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Alajuelita', 'active' => 1, 'slug' => 'alajuelita'],
            ['id' => 24333, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Aserrí', 'active' => 1, 'slug' => 'aserri'],
            ['id' => 24334, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Central San José', 'active' => 1, 'slug' => 'central-san-jose'],
            ['id' => 24335, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Curridabat', 'active' => 1, 'slug' => 'curridabat'],
            ['id' => 24336, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Desamparados', 'active' => 1, 'slug' => 'desamparados'],
            ['id' => 24337, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Dota', 'active' => 1, 'slug' => 'dota'],
            ['id' => 24338, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Escazú', 'active' => 1, 'slug' => 'escazu'],
            ['id' => 24339, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Goicoechea', 'active' => 1, 'slug' => 'goicoechea'],
            ['id' => 24340, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'León Cortés', 'active' => 1, 'slug' => 'leon-cortes'],
            ['id' => 24341, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Montes de Oca', 'active' => 1, 'slug' => 'montes-de-oca'],
            ['id' => 24342, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Mora', 'active' => 1, 'slug' => 'mora'],
            ['id' => 24343, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Moravia', 'active' => 1, 'slug' => 'moravia'],
            ['id' => 24344, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Pérez Zeledón', 'active' => 1, 'slug' => 'perez-zeledon'],
            ['id' => 24345, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Puriscal', 'active' => 1, 'slug' => 'puriscal'],
            ['id' => 24346, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'San Jose', 'active' => 1, 'slug' => 'san-jose'],
            ['id' => 24347, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Santa Ana', 'active' => 1, 'slug' => 'santa-ana'],
            ['id' => 24348, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Tarrazú', 'active' => 1, 'slug' => 'tarrazu'],
            ['id' => 24349, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Tibás', 'active' => 1, 'slug' => 'tibas'],
            ['id' => 24350, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Turrúbares', 'active' => 1, 'slug' => 'turrubares'],
            ['id' => 24351, 'region_id' => 710268, 'country_code' => 'CR', 'name' => 'Vázquez de Coronado', 'active' => 1, 'slug' => 'vazquez-de-coronado']
    	];
    }
}
