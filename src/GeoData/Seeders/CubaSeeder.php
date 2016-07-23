<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class CubaSeeder extends Seeder
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
    	return ['code' => 'CU', 'name' => 'Cuba', 'slug' => 'cuba'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 864, 'country_code' => 'CU', 'name' => 'La Habana', 'active' => 1, 'slug' => 'la-habana'],
            ['id' => 738105, 'country_code' => 'CU', 'name' => 'Isla de la Juventud', 'active' => 1, 'slug' => 'isla-de-la-juventud'],
            ['id' => 738107, 'country_code' => 'CU', 'name' => 'Pinar del Río', 'active' => 1, 'slug' => 'pinar-del-rio'],
            ['id' => 738141, 'country_code' => 'CU', 'name' => 'Ciudad de la Habana', 'active' => 1, 'slug' => 'ciudad-de-la-habana'],
            ['id' => 738157, 'country_code' => 'CU', 'name' => 'Matanzas', 'active' => 1, 'slug' => 'matanzas'],
            ['id' => 738172, 'country_code' => 'CU', 'name' => 'Cienfuegos', 'active' => 1, 'slug' => 'cienfuegos'],
            ['id' => 738181, 'country_code' => 'CU', 'name' => 'Villa Clara', 'active' => 1, 'slug' => 'villa-clara'],
            ['id' => 738195, 'country_code' => 'CU', 'name' => 'Sancti Spíritus', 'active' => 1, 'slug' => 'sancti-spiritus'],
            ['id' => 738204, 'country_code' => 'CU', 'name' => 'Ciego deÁvila', 'active' => 1, 'slug' => 'ciego-deavila'],
            ['id' => 738215, 'country_code' => 'CU', 'name' => 'Camagüey', 'active' => 1, 'slug' => 'camaguey'],
            ['id' => 738229, 'country_code' => 'CU', 'name' => 'Las Tunas', 'active' => 1, 'slug' => 'las-tunas'],
            ['id' => 738238, 'country_code' => 'CU', 'name' => 'Granma', 'active' => 1, 'slug' => 'granma'],
            ['id' => 738252, 'country_code' => 'CU', 'name' => 'Holguín', 'active' => 1, 'slug' => 'holguin'],
            ['id' => 738267, 'country_code' => 'CU', 'name' => 'Santiago de Cuba', 'active' => 1, 'slug' => 'santiago-de-cuba'],
            ['id' => 738277, 'country_code' => 'CU', 'name' => 'Guantánamo', 'active' => 1, 'slug' => 'guantanamo']
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
            ['id' => 32440, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Alquízar', 'active' => 1, 'slug' => 'alquizar'],
            ['id' => 32441, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Artemisa', 'active' => 1, 'slug' => 'artemisa'],
            ['id' => 32442, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Batabanó', 'active' => 1, 'slug' => 'batabano'],
            ['id' => 32443, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Bauta', 'active' => 1, 'slug' => 'bauta'],
            ['id' => 32444, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Bejucal', 'active' => 1, 'slug' => 'bejucal'],
            ['id' => 32445, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Caimito del Guayabal', 'active' => 1, 'slug' => 'caimito-del-guayabal'],
            ['id' => 32446, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Guanajay', 'active' => 1, 'slug' => 'guanajay'],
            ['id' => 32447, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Güines', 'active' => 1, 'slug' => 'guines'],
            ['id' => 32448, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Güira de Melena', 'active' => 1, 'slug' => 'guira-de-melena'],
            ['id' => 32449, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Jaruco', 'active' => 1, 'slug' => 'jaruco'],
            ['id' => 32450, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Madruga', 'active' => 1, 'slug' => 'madruga'],
            ['id' => 32451, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Mariel', 'active' => 1, 'slug' => 'mariel'],
            ['id' => 32452, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Melena del Sur', 'active' => 1, 'slug' => 'melena-del-sur'],
            ['id' => 32453, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Nueva Paz', 'active' => 1, 'slug' => 'nueva-paz'],
            ['id' => 32454, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Quivicán', 'active' => 1, 'slug' => 'quivican'],
            ['id' => 32455, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'San Antonio de los Baños', 'active' => 1, 'slug' => 'san-antonio-de-los-banos'],
            ['id' => 32456, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'San José de las Lajas', 'active' => 1, 'slug' => 'san-jose-de-las-lajas'],
            ['id' => 32457, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'San Nicolás de Bari', 'active' => 1, 'slug' => 'san-nicolas-de-bari'],
            ['id' => 32458, 'region_id' => 864, 'country_code' => 'CU', 'name' => 'Santa Cruz del Norte', 'active' => 1, 'slug' => 'santa-cruz-del-norte'],
            ['id' => 32425, 'region_id' => 738105, 'country_code' => 'CU', 'name' => 'Isla de la Juventud', 'active' => 1, 'slug' => 'isla-de-la-juventud'],
            ['id' => 32426, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'Bahía Honda', 'active' => 1, 'slug' => 'bahia-honda'],
            ['id' => 32427, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'Candelaria', 'active' => 1, 'slug' => 'candelaria'],
            ['id' => 32428, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'Consolación del Sur', 'active' => 1, 'slug' => 'consolacion-del-sur'],
            ['id' => 32429, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'Guane', 'active' => 1, 'slug' => 'guane'],
            ['id' => 32430, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'La Palma', 'active' => 1, 'slug' => 'la-palma'],
            ['id' => 32431, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'Los Palacios', 'active' => 1, 'slug' => 'los-palacios'],
            ['id' => 32432, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'Mantua', 'active' => 1, 'slug' => 'mantua'],
            ['id' => 32433, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'Minas de Matahambre', 'active' => 1, 'slug' => 'minas-de-matahambre'],
            ['id' => 32434, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'Pinar del Río', 'active' => 1, 'slug' => 'pinar-del-rio'],
            ['id' => 32435, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'San Cristóbal', 'active' => 1, 'slug' => 'san-cristobal'],
            ['id' => 32436, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'San Juan', 'active' => 1, 'slug' => 'san-juan'],
            ['id' => 32437, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'San Luis', 'active' => 1, 'slug' => 'san-luis'],
            ['id' => 32438, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'Sandino', 'active' => 1, 'slug' => 'sandino'],
            ['id' => 32439, 'region_id' => 738107, 'country_code' => 'CU', 'name' => 'Viñales', 'active' => 1, 'slug' => 'vinales'],
            ['id' => 32459, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Arroyo Naranjo', 'active' => 1, 'slug' => 'arroyo-naranjo'],
            ['id' => 32460, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Boyeros', 'active' => 1, 'slug' => 'boyeros'],
            ['id' => 32461, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Centro Habana', 'active' => 1, 'slug' => 'centro-habana'],
            ['id' => 32462, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Cerro', 'active' => 1, 'slug' => 'cerro'],
            ['id' => 32463, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Cotorro', 'active' => 1, 'slug' => 'cotorro'],
            ['id' => 32464, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Diez de Octubre', 'active' => 1, 'slug' => 'diez-de-octubre'],
            ['id' => 32465, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Guanabacoa', 'active' => 1, 'slug' => 'guanabacoa'],
            ['id' => 32466, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'La Habana del Este', 'active' => 1, 'slug' => 'la-habana-del-este'],
            ['id' => 32467, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'La Habana Vieja', 'active' => 1, 'slug' => 'la-habana-vieja'],
            ['id' => 32468, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'La Lisa', 'active' => 1, 'slug' => 'la-lisa'],
            ['id' => 32469, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Marianao', 'active' => 1, 'slug' => 'marianao'],
            ['id' => 32470, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Playa', 'active' => 1, 'slug' => 'playa'],
            ['id' => 32471, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Plaza de la Revolución', 'active' => 1, 'slug' => 'plaza-de-la-revolucion'],
            ['id' => 32472, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'Regla', 'active' => 1, 'slug' => 'regla'],
            ['id' => 32473, 'region_id' => 738141, 'country_code' => 'CU', 'name' => 'San Miguel del Padrón', 'active' => 1, 'slug' => 'san-miguel-del-padron'],
            ['id' => 32474, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Varadero', 'active' => 1, 'slug' => 'varadero'],
            ['id' => 32475, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Limonar', 'active' => 1, 'slug' => 'limonar'],
            ['id' => 32476, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Ciénaga de Zapata', 'active' => 1, 'slug' => 'cienaga-de-zapata'],
            ['id' => 32477, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Calimete', 'active' => 1, 'slug' => 'calimete'],
            ['id' => 32478, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Los Arabos', 'active' => 1, 'slug' => 'los-arabos'],
            ['id' => 32479, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Cárdenas', 'active' => 1, 'slug' => 'cardenas'],
            ['id' => 32480, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Unión de Reyes', 'active' => 1, 'slug' => 'union-de-reyes'],
            ['id' => 32481, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Colón', 'active' => 1, 'slug' => 'colon'],
            ['id' => 32482, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Jagüey Grande', 'active' => 1, 'slug' => 'jaguey-grande'],
            ['id' => 32483, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Jovellanos', 'active' => 1, 'slug' => 'jovellanos'],
            ['id' => 32484, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Pedro Betancourt', 'active' => 1, 'slug' => 'pedro-betancourt'],
            ['id' => 32485, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Perico', 'active' => 1, 'slug' => 'perico'],
            ['id' => 32486, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Matanzas', 'active' => 1, 'slug' => 'matanzas'],
            ['id' => 32487, 'region_id' => 738157, 'country_code' => 'CU', 'name' => 'Martí', 'active' => 1, 'slug' => 'marti'],
            ['id' => 32488, 'region_id' => 738172, 'country_code' => 'CU', 'name' => 'Abreu', 'active' => 1, 'slug' => 'abreu'],
            ['id' => 32489, 'region_id' => 738172, 'country_code' => 'CU', 'name' => 'Aguada de Pasajeros', 'active' => 1, 'slug' => 'aguada-de-pasajeros'],
            ['id' => 32490, 'region_id' => 738172, 'country_code' => 'CU', 'name' => 'Cienfuegos', 'active' => 1, 'slug' => 'cienfuegos'],
            ['id' => 32491, 'region_id' => 738172, 'country_code' => 'CU', 'name' => 'Cruces', 'active' => 1, 'slug' => 'cruces'],
            ['id' => 32492, 'region_id' => 738172, 'country_code' => 'CU', 'name' => 'Cumanayagua', 'active' => 1, 'slug' => 'cumanayagua'],
            ['id' => 32493, 'region_id' => 738172, 'country_code' => 'CU', 'name' => 'Lajas', 'active' => 1, 'slug' => 'lajas'],
            ['id' => 32494, 'region_id' => 738172, 'country_code' => 'CU', 'name' => 'Palmira', 'active' => 1, 'slug' => 'palmira'],
            ['id' => 32495, 'region_id' => 738172, 'country_code' => 'CU', 'name' => 'Rodas', 'active' => 1, 'slug' => 'rodas'],
            ['id' => 32496, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Caibarien', 'active' => 1, 'slug' => 'caibarien'],
            ['id' => 32497, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Camajuaní', 'active' => 1, 'slug' => 'camajuani'],
            ['id' => 32498, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Cifuentes', 'active' => 1, 'slug' => 'cifuentes'],
            ['id' => 32499, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Corralillo', 'active' => 1, 'slug' => 'corralillo'],
            ['id' => 32500, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Encrucijada', 'active' => 1, 'slug' => 'encrucijada'],
            ['id' => 32501, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Manicaragua', 'active' => 1, 'slug' => 'manicaragua'],
            ['id' => 32502, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Placetas', 'active' => 1, 'slug' => 'placetas'],
            ['id' => 32503, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Quemado de Guines', 'active' => 1, 'slug' => 'quemado-de-guines'],
            ['id' => 32504, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Ranchuelo', 'active' => 1, 'slug' => 'ranchuelo'],
            ['id' => 32505, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Remedios', 'active' => 1, 'slug' => 'remedios'],
            ['id' => 32506, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Sagua la Grande', 'active' => 1, 'slug' => 'sagua-la-grande'],
            ['id' => 32507, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Santa Clara', 'active' => 1, 'slug' => 'santa-clara'],
            ['id' => 32508, 'region_id' => 738181, 'country_code' => 'CU', 'name' => 'Santo Domingo', 'active' => 1, 'slug' => 'santo-domingo'],
            ['id' => 32509, 'region_id' => 738195, 'country_code' => 'CU', 'name' => 'Sancti Spíritus', 'active' => 1, 'slug' => 'sancti-spiritus'],
            ['id' => 32510, 'region_id' => 738195, 'country_code' => 'CU', 'name' => 'Cabaiguán', 'active' => 1, 'slug' => 'cabaiguan'],
            ['id' => 32511, 'region_id' => 738195, 'country_code' => 'CU', 'name' => 'Fomento', 'active' => 1, 'slug' => 'fomento'],
            ['id' => 32512, 'region_id' => 738195, 'country_code' => 'CU', 'name' => 'Jatibonico', 'active' => 1, 'slug' => 'jatibonico'],
            ['id' => 32513, 'region_id' => 738195, 'country_code' => 'CU', 'name' => 'La Sierpe', 'active' => 1, 'slug' => 'la-sierpe'],
            ['id' => 32514, 'region_id' => 738195, 'country_code' => 'CU', 'name' => 'Taguasco', 'active' => 1, 'slug' => 'taguasco'],
            ['id' => 32515, 'region_id' => 738195, 'country_code' => 'CU', 'name' => 'Trinidad', 'active' => 1, 'slug' => 'trinidad'],
            ['id' => 32516, 'region_id' => 738195, 'country_code' => 'CU', 'name' => 'Yaguajay', 'active' => 1, 'slug' => 'yaguajay'],
            ['id' => 32517, 'region_id' => 738204, 'country_code' => 'CU', 'name' => 'Chambas', 'active' => 1, 'slug' => 'chambas'],
            ['id' => 32518, 'region_id' => 738204, 'country_code' => 'CU', 'name' => 'Moron', 'active' => 1, 'slug' => 'moron'],
            ['id' => 32519, 'region_id' => 738204, 'country_code' => 'CU', 'name' => 'Bolivia', 'active' => 1, 'slug' => 'bolivia'],
            ['id' => 32520, 'region_id' => 738204, 'country_code' => 'CU', 'name' => 'Primero de Enero', 'active' => 1, 'slug' => 'primero-de-enero'],
            ['id' => 32521, 'region_id' => 738204, 'country_code' => 'CU', 'name' => 'Ciro Redondo', 'active' => 1, 'slug' => 'ciro-redondo'],
            ['id' => 32522, 'region_id' => 738204, 'country_code' => 'CU', 'name' => 'Florencia', 'active' => 1, 'slug' => 'florencia'],
            ['id' => 32523, 'region_id' => 738204, 'country_code' => 'CU', 'name' => 'Majagua', 'active' => 1, 'slug' => 'majagua'],
            ['id' => 32524, 'region_id' => 738204, 'country_code' => 'CU', 'name' => 'Ciego deÁvila', 'active' => 1, 'slug' => 'ciego-deavila'],
            ['id' => 32525, 'region_id' => 738204, 'country_code' => 'CU', 'name' => 'Venezuela', 'active' => 1, 'slug' => 'venezuela'],
            ['id' => 32526, 'region_id' => 738204, 'country_code' => 'CU', 'name' => 'Baragua', 'active' => 1, 'slug' => 'baragua'],
            ['id' => 32527, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Camagüey', 'active' => 1, 'slug' => 'camaguey'],
            ['id' => 32528, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Céspedes', 'active' => 1, 'slug' => 'cespedes'],
            ['id' => 32529, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Esmeralda', 'active' => 1, 'slug' => 'esmeralda'],
            ['id' => 32530, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Florida', 'active' => 1, 'slug' => 'florida'],
            ['id' => 32531, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Guáimaro', 'active' => 1, 'slug' => 'guaimaro'],
            ['id' => 32532, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Jimaguayú', 'active' => 1, 'slug' => 'jimaguayu'],
            ['id' => 32533, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Minas', 'active' => 1, 'slug' => 'minas'],
            ['id' => 32534, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Najasa', 'active' => 1, 'slug' => 'najasa'],
            ['id' => 32535, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Nuevitas', 'active' => 1, 'slug' => 'nuevitas'],
            ['id' => 32536, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Santa Cruz del Sur', 'active' => 1, 'slug' => 'santa-cruz-del-sur'],
            ['id' => 32537, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Sibanicú', 'active' => 1, 'slug' => 'sibanicu'],
            ['id' => 32538, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Sierra de Cubitas', 'active' => 1, 'slug' => 'sierra-de-cubitas'],
            ['id' => 32539, 'region_id' => 738215, 'country_code' => 'CU', 'name' => 'Vertientes', 'active' => 1, 'slug' => 'vertientes'],
            ['id' => 32540, 'region_id' => 738229, 'country_code' => 'CU', 'name' => 'Amancio', 'active' => 1, 'slug' => 'amancio'],
            ['id' => 32541, 'region_id' => 738229, 'country_code' => 'CU', 'name' => 'Colobia', 'active' => 1, 'slug' => 'colobia'],
            ['id' => 32542, 'region_id' => 738229, 'country_code' => 'CU', 'name' => 'Jesús Menéndez', 'active' => 1, 'slug' => 'jesus-menendez'],
            ['id' => 32543, 'region_id' => 738229, 'country_code' => 'CU', 'name' => 'Jobabo', 'active' => 1, 'slug' => 'jobabo'],
            ['id' => 32544, 'region_id' => 738229, 'country_code' => 'CU', 'name' => 'Las Tunas', 'active' => 1, 'slug' => 'las-tunas'],
            ['id' => 32545, 'region_id' => 738229, 'country_code' => 'CU', 'name' => 'Majibacoa', 'active' => 1, 'slug' => 'majibacoa'],
            ['id' => 32546, 'region_id' => 738229, 'country_code' => 'CU', 'name' => 'Manati', 'active' => 1, 'slug' => 'manati'],
            ['id' => 32547, 'region_id' => 738229, 'country_code' => 'CU', 'name' => 'Puerto Padre', 'active' => 1, 'slug' => 'puerto-padre'],
            ['id' => 32548, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Bartolomé Masó', 'active' => 1, 'slug' => 'bartolome-maso'],
            ['id' => 32549, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Bayamo', 'active' => 1, 'slug' => 'bayamo'],
            ['id' => 32550, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Buey Arriba', 'active' => 1, 'slug' => 'buey-arriba'],
            ['id' => 32551, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Campechuela', 'active' => 1, 'slug' => 'campechuela'],
            ['id' => 32552, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Cauto Cristo', 'active' => 1, 'slug' => 'cauto-cristo'],
            ['id' => 32553, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Guisa', 'active' => 1, 'slug' => 'guisa'],
            ['id' => 32554, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Jiguaní', 'active' => 1, 'slug' => 'jiguani'],
            ['id' => 32555, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Manzanillo', 'active' => 1, 'slug' => 'manzanillo'],
            ['id' => 32556, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Media Luna', 'active' => 1, 'slug' => 'media-luna'],
            ['id' => 32557, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Niquero', 'active' => 1, 'slug' => 'niquero'],
            ['id' => 32558, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Pilón', 'active' => 1, 'slug' => 'pilon'],
            ['id' => 32559, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Río Cauto', 'active' => 1, 'slug' => 'rio-cauto'],
            ['id' => 32560, 'region_id' => 738238, 'country_code' => 'CU', 'name' => 'Yara', 'active' => 1, 'slug' => 'yara'],
            ['id' => 32561, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Antilla', 'active' => 1, 'slug' => 'antilla'],
            ['id' => 32562, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Báguanos', 'active' => 1, 'slug' => 'baguanos'],
            ['id' => 32563, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Banes', 'active' => 1, 'slug' => 'banes'],
            ['id' => 32564, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Cacocum', 'active' => 1, 'slug' => 'cacocum'],
            ['id' => 32565, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Calixto García', 'active' => 1, 'slug' => 'calixto-garcia'],
            ['id' => 32566, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Cueto', 'active' => 1, 'slug' => 'cueto'],
            ['id' => 32567, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Frank País', 'active' => 1, 'slug' => 'frank-pais'],
            ['id' => 32568, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Gibara', 'active' => 1, 'slug' => 'gibara'],
            ['id' => 32569, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Holguín', 'active' => 1, 'slug' => 'holguin'],
            ['id' => 32570, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Mayarí', 'active' => 1, 'slug' => 'mayari'],
            ['id' => 32571, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Moa', 'active' => 1, 'slug' => 'moa'],
            ['id' => 32572, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Rafael Freyre', 'active' => 1, 'slug' => 'rafael-freyre'],
            ['id' => 32573, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Sagua de Tánamo', 'active' => 1, 'slug' => 'sagua-de-tanamo'],
            ['id' => 32574, 'region_id' => 738252, 'country_code' => 'CU', 'name' => 'Urbano Noris', 'active' => 1, 'slug' => 'urbano-noris'],
            ['id' => 32575, 'region_id' => 738267, 'country_code' => 'CU', 'name' => 'Contramaestre', 'active' => 1, 'slug' => 'contramaestre'],
            ['id' => 32576, 'region_id' => 738267, 'country_code' => 'CU', 'name' => 'Guamá', 'active' => 1, 'slug' => 'guama'],
            ['id' => 32577, 'region_id' => 738267, 'country_code' => 'CU', 'name' => 'Mella', 'active' => 1, 'slug' => 'mella'],
            ['id' => 32578, 'region_id' => 738267, 'country_code' => 'CU', 'name' => 'Palma Soriano', 'active' => 1, 'slug' => 'palma-soriano'],
            ['id' => 32579, 'region_id' => 738267, 'country_code' => 'CU', 'name' => 'San Luis', 'active' => 1, 'slug' => 'san-luis'],
            ['id' => 32580, 'region_id' => 738267, 'country_code' => 'CU', 'name' => 'Santiago de Cuba', 'active' => 1, 'slug' => 'santiago-de-cuba'],
            ['id' => 32581, 'region_id' => 738267, 'country_code' => 'CU', 'name' => 'Segundo Frente', 'active' => 1, 'slug' => 'segundo-frente'],
            ['id' => 32582, 'region_id' => 738267, 'country_code' => 'CU', 'name' => 'Songo-La Maya', 'active' => 1, 'slug' => 'songo-la-maya'],
            ['id' => 32583, 'region_id' => 738267, 'country_code' => 'CU', 'name' => 'Tercer Frente', 'active' => 1, 'slug' => 'tercer-frente'],
            ['id' => 32584, 'region_id' => 738277, 'country_code' => 'CU', 'name' => 'Baracoa', 'active' => 1, 'slug' => 'baracoa'],
            ['id' => 32585, 'region_id' => 738277, 'country_code' => 'CU', 'name' => 'Caimanera', 'active' => 1, 'slug' => 'caimanera'],
            ['id' => 32586, 'region_id' => 738277, 'country_code' => 'CU', 'name' => 'El Salvador', 'active' => 1, 'slug' => 'el-salvador'],
            ['id' => 32587, 'region_id' => 738277, 'country_code' => 'CU', 'name' => 'Guantánamo', 'active' => 1, 'slug' => 'guantanamo'],
            ['id' => 32588, 'region_id' => 738277, 'country_code' => 'CU', 'name' => 'Imias', 'active' => 1, 'slug' => 'imias'],
            ['id' => 32589, 'region_id' => 738277, 'country_code' => 'CU', 'name' => 'Maisi', 'active' => 1, 'slug' => 'maisi'],
            ['id' => 32590, 'region_id' => 738277, 'country_code' => 'CU', 'name' => 'Manuel Tames', 'active' => 1, 'slug' => 'manuel-tames'],
            ['id' => 32591, 'region_id' => 738277, 'country_code' => 'CU', 'name' => 'Niceto Perez', 'active' => 1, 'slug' => 'niceto-perez'],
            ['id' => 32592, 'region_id' => 738277, 'country_code' => 'CU', 'name' => 'San Antonio del Sur', 'active' => 1, 'slug' => 'san-antonio-del-sur'],
            ['id' => 32593, 'region_id' => 738277, 'country_code' => 'CU', 'name' => 'Yateras', 'active' => 1, 'slug' => 'yateras']
    	];
    }
}
