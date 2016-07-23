<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class ElSalvadorSeeder extends Seeder
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
    	return ['code' => 'SV', 'name' => 'El Salvador', 'slug' => 'el-salvador'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 707144, 'country_code' => 'SV', 'name' => 'Usulutan', 'active' => 1, 'slug' => 'usulutan'],
            ['id' => 707147, 'country_code' => 'SV', 'name' => 'Santa Ana', 'active' => 1, 'slug' => 'santa-ana'],
            ['id' => 707148, 'country_code' => 'SV', 'name' => 'Chalatenango', 'active' => 1, 'slug' => 'chalatenango'],
            ['id' => 707150, 'country_code' => 'SV', 'name' => 'Morazán', 'active' => 1, 'slug' => 'morazan'],
            ['id' => 707151, 'country_code' => 'SV', 'name' => 'Ahuachapán', 'active' => 1, 'slug' => 'ahuachapan'],
            ['id' => 707153, 'country_code' => 'SV', 'name' => 'La Paz', 'active' => 1, 'slug' => 'la-paz'],
            ['id' => 707154, 'country_code' => 'SV', 'name' => 'San Vicente', 'active' => 1, 'slug' => 'san-vicente'],
            ['id' => 707155, 'country_code' => 'SV', 'name' => 'Cabañas', 'active' => 1, 'slug' => 'cabanas'],
            ['id' => 707156, 'country_code' => 'SV', 'name' => 'San Salvador', 'active' => 1, 'slug' => 'san-salvador'],
            ['id' => 707157, 'country_code' => 'SV', 'name' => 'Cuscatlán', 'active' => 1, 'slug' => 'cuscatlan'],
            ['id' => 708025, 'country_code' => 'SV', 'name' => 'La Libertad', 'active' => 1, 'slug' => 'la-libertad'],
            ['id' => 708070, 'country_code' => 'SV', 'name' => 'La Unión', 'active' => 1, 'slug' => 'la-union'],
            ['id' => 708096, 'country_code' => 'SV', 'name' => 'San Miguel', 'active' => 1, 'slug' => 'san-miguel'],
            ['id' => 708155, 'country_code' => 'SV', 'name' => 'Sonsonante', 'active' => 1, 'slug' => 'sonsonante']
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
            ['id' => 23692, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Alegría', 'active' => 1, 'slug' => 'alegria'],
            ['id' => 23693, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Berlín', 'active' => 1, 'slug' => 'berlin'],
            ['id' => 23694, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'California', 'active' => 1, 'slug' => 'california'],
            ['id' => 23695, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Concepción Batres', 'active' => 1, 'slug' => 'concepcion-batres'],
            ['id' => 23696, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Ereguayquín', 'active' => 1, 'slug' => 'ereguayquin'],
            ['id' => 23697, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Estancuelas', 'active' => 1, 'slug' => 'estancuelas'],
            ['id' => 23698, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Jiquilisco', 'active' => 1, 'slug' => 'jiquilisco'],
            ['id' => 23699, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Jucuapa', 'active' => 1, 'slug' => 'jucuapa'],
            ['id' => 23700, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Jucuarán', 'active' => 1, 'slug' => 'jucuaran'],
            ['id' => 23701, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Mercedes Umaña', 'active' => 1, 'slug' => 'mercedes-umana'],
            ['id' => 23702, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Nueva Granada', 'active' => 1, 'slug' => 'nueva-granada'],
            ['id' => 23703, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Ozatlán', 'active' => 1, 'slug' => 'ozatlan'],
            ['id' => 23704, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Puerto el Triunfo', 'active' => 1, 'slug' => 'puerto-el-triunfo'],
            ['id' => 23705, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'San Agustín', 'active' => 1, 'slug' => 'san-agustin'],
            ['id' => 23706, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'San Buenaventura', 'active' => 1, 'slug' => 'san-buenaventura'],
            ['id' => 23707, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'San Dionisio', 'active' => 1, 'slug' => 'san-dionisio'],
            ['id' => 23708, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'San Francisco Javier', 'active' => 1, 'slug' => 'san-francisco-javier'],
            ['id' => 23709, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Santa Elena', 'active' => 1, 'slug' => 'santa-elena'],
            ['id' => 23710, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Santa María', 'active' => 1, 'slug' => 'santa-maria'],
            ['id' => 23711, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Santiago de María', 'active' => 1, 'slug' => 'santiago-de-maria'],
            ['id' => 23712, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Tecapán', 'active' => 1, 'slug' => 'tecapan'],
            ['id' => 23713, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Usulután', 'active' => 1, 'slug' => 'usulutan'],
            ['id' => 23714, 'region_id' => 707144, 'country_code' => 'SV', 'name' => 'Villa el Triunfo', 'active' => 1, 'slug' => 'villa-el-triunfo'],
            ['id' => 23663, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'Candelaria de la Frontera', 'active' => 1, 'slug' => 'candelaria-de-la-frontera'],
            ['id' => 23664, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'Chalchuapa', 'active' => 1, 'slug' => 'chalchuapa'],
            ['id' => 23665, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'Coatepeque', 'active' => 1, 'slug' => 'coatepeque'],
            ['id' => 23666, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'El Congo', 'active' => 1, 'slug' => 'el-congo'],
            ['id' => 23667, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'El Porvenir', 'active' => 1, 'slug' => 'el-porvenir'],
            ['id' => 23668, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'Masahuat', 'active' => 1, 'slug' => 'masahuat'],
            ['id' => 23669, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'Metapán', 'active' => 1, 'slug' => 'metapan'],
            ['id' => 23670, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'San Antonio Pajonal', 'active' => 1, 'slug' => 'san-antonio-pajonal'],
            ['id' => 23671, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'San Sebastián Salitrillo', 'active' => 1, 'slug' => 'san-sebastian-salitrillo'],
            ['id' => 23672, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'Santa Ana', 'active' => 1, 'slug' => 'santa-ana'],
            ['id' => 23673, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'Santa Rosa Guachipilín', 'active' => 1, 'slug' => 'santa-rosa-guachipilin'],
            ['id' => 23674, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'Santiago de la Frontera', 'active' => 1, 'slug' => 'santiago-de-la-frontera'],
            ['id' => 23675, 'region_id' => 707147, 'country_code' => 'SV', 'name' => 'Texistepeque', 'active' => 1, 'slug' => 'texistepeque'],
            ['id' => 23503, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Agua Caliente', 'active' => 1, 'slug' => 'agua-caliente'],
            ['id' => 23504, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Arcatao', 'active' => 1, 'slug' => 'arcatao'],
            ['id' => 23505, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Azacualpa', 'active' => 1, 'slug' => 'azacualpa'],
            ['id' => 23506, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Chalatenango', 'active' => 1, 'slug' => 'chalatenango'],
            ['id' => 23507, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Citalá', 'active' => 1, 'slug' => 'citala'],
            ['id' => 23508, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Comalapa', 'active' => 1, 'slug' => 'comalapa'],
            ['id' => 23509, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Concepción', 'active' => 1, 'slug' => 'concepcion'],
            ['id' => 23510, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Concepción Quezaltepeque', 'active' => 1, 'slug' => 'concepcion-quezaltepeque'],
            ['id' => 23511, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Dulce Nombre de María', 'active' => 1, 'slug' => 'dulce-nombre-de-maria'],
            ['id' => 23512, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'El Carrizal', 'active' => 1, 'slug' => 'el-carrizal'],
            ['id' => 23513, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'El Paraíso', 'active' => 1, 'slug' => 'el-paraiso'],
            ['id' => 23514, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'La Laguna', 'active' => 1, 'slug' => 'la-laguna'],
            ['id' => 23515, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'La Palma', 'active' => 1, 'slug' => 'la-palma'],
            ['id' => 23516, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'La Reina', 'active' => 1, 'slug' => 'la-reina'],
            ['id' => 23517, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Las Vueltas', 'active' => 1, 'slug' => 'las-vueltas'],
            ['id' => 23518, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Nombre de Jesús', 'active' => 1, 'slug' => 'nombre-de-jesus'],
            ['id' => 23519, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Nueva Concepción', 'active' => 1, 'slug' => 'nueva-concepcion'],
            ['id' => 23520, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Nueva Trinidad', 'active' => 1, 'slug' => 'nueva-trinidad'],
            ['id' => 23521, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Ojos de Agua', 'active' => 1, 'slug' => 'ojos-de-agua'],
            ['id' => 23522, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Potonico', 'active' => 1, 'slug' => 'potonico'],
            ['id' => 23523, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San Antonio de la Cruz', 'active' => 1, 'slug' => 'san-antonio-de-la-cruz'],
            ['id' => 23524, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San Antonio Los Ranchos', 'active' => 1, 'slug' => 'san-antonio-los-ranchos'],
            ['id' => 23525, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San Fernando', 'active' => 1, 'slug' => 'san-fernando'],
            ['id' => 23526, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San Francisco Lempa', 'active' => 1, 'slug' => 'san-francisco-lempa'],
            ['id' => 23527, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San Francisco Morazán', 'active' => 1, 'slug' => 'san-francisco-morazan'],
            ['id' => 23528, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San Ignacio', 'active' => 1, 'slug' => 'san-ignacio'],
            ['id' => 23529, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San Isidro Labrador', 'active' => 1, 'slug' => 'san-isidro-labrador'],
            ['id' => 23530, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San José Cancasque', 'active' => 1, 'slug' => 'san-jose-cancasque'],
            ['id' => 23531, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San José Las Flores', 'active' => 1, 'slug' => 'san-jose-las-flores'],
            ['id' => 23532, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San Luis Del Carmen', 'active' => 1, 'slug' => 'san-luis-del-carmen'],
            ['id' => 23533, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San Miguel de Mercedes', 'active' => 1, 'slug' => 'san-miguel-de-mercedes'],
            ['id' => 23534, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'San Rafael', 'active' => 1, 'slug' => 'san-rafael'],
            ['id' => 23535, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Santa Rita', 'active' => 1, 'slug' => 'santa-rita'],
            ['id' => 23536, 'region_id' => 707148, 'country_code' => 'SV', 'name' => 'Tejuela', 'active' => 1, 'slug' => 'tejuela'],
            ['id' => 23615, 'region_id' => 707150, 'country_code' => 'SV', 'name' => 'Gualococti', 'active' => 1, 'slug' => 'gualococti'],
            ['id' => 23616, 'region_id' => 707150, 'country_code' => 'SV', 'name' => 'Lolotiquillo', 'active' => 1, 'slug' => 'lolotiquillo'],
            ['id' => 23617, 'region_id' => 707150, 'country_code' => 'SV', 'name' => 'San Fernando', 'active' => 1, 'slug' => 'san-fernando'],
            ['id' => 23618, 'region_id' => 707150, 'country_code' => 'SV', 'name' => 'San Isidro', 'active' => 1, 'slug' => 'san-isidro'],
            ['id' => 23619, 'region_id' => 707150, 'country_code' => 'SV', 'name' => 'Yamabal', 'active' => 1, 'slug' => 'yamabal'],
            ['id' => 23620, 'region_id' => 707150, 'country_code' => 'SV', 'name' => 'Yoloaiquín', 'active' => 1, 'slug' => 'yoloaiquin'],
            ['id' => 23482, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'Ahuachapán', 'active' => 1, 'slug' => 'ahuachapan'],
            ['id' => 23483, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'Apaneca', 'active' => 1, 'slug' => 'apaneca'],
            ['id' => 23484, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'Atiquizaya', 'active' => 1, 'slug' => 'atiquizaya'],
            ['id' => 23485, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'Concepción de Ataco', 'active' => 1, 'slug' => 'concepcion-de-ataco'],
            ['id' => 23486, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'El Refugio', 'active' => 1, 'slug' => 'el-refugio'],
            ['id' => 23487, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'Guaymango', 'active' => 1, 'slug' => 'guaymango'],
            ['id' => 23488, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'Jujutla', 'active' => 1, 'slug' => 'jujutla'],
            ['id' => 23489, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'San Francisco Menéndez', 'active' => 1, 'slug' => 'san-francisco-menendez'],
            ['id' => 23490, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'San Lorenzo', 'active' => 1, 'slug' => 'san-lorenzo'],
            ['id' => 23491, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'San Pedro Tuxtla', 'active' => 1, 'slug' => 'san-pedro-tuxtla'],
            ['id' => 23492, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'Tacuba', 'active' => 1, 'slug' => 'tacuba'],
            ['id' => 23493, 'region_id' => 707151, 'country_code' => 'SV', 'name' => 'Turín', 'active' => 1, 'slug' => 'turin'],
            ['id' => 23575, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'Cuyultitán', 'active' => 1, 'slug' => 'cuyultitan'],
            ['id' => 23576, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'El Rosario', 'active' => 1, 'slug' => 'el-rosario'],
            ['id' => 23577, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'Jerusalén', 'active' => 1, 'slug' => 'jerusalen'],
            ['id' => 23578, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'Mercedes la Ceiba', 'active' => 1, 'slug' => 'mercedes-la-ceiba'],
            ['id' => 23579, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'Olocuilta', 'active' => 1, 'slug' => 'olocuilta'],
            ['id' => 23580, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'Paraíso de Osorio', 'active' => 1, 'slug' => 'paraiso-de-osorio'],
            ['id' => 23581, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Antonio Masahuat', 'active' => 1, 'slug' => 'san-antonio-masahuat'],
            ['id' => 23582, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Emigdio', 'active' => 1, 'slug' => 'san-emigdio'],
            ['id' => 23583, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Francisco Chinameca', 'active' => 1, 'slug' => 'san-francisco-chinameca'],
            ['id' => 23584, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Juan Nonualco', 'active' => 1, 'slug' => 'san-juan-nonualco'],
            ['id' => 23585, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Juan Talpa', 'active' => 1, 'slug' => 'san-juan-talpa'],
            ['id' => 23586, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Juan Tepezontes', 'active' => 1, 'slug' => 'san-juan-tepezontes'],
            ['id' => 23587, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Luis la Herradura', 'active' => 1, 'slug' => 'san-luis-la-herradura'],
            ['id' => 23588, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Luis Talpa', 'active' => 1, 'slug' => 'san-luis-talpa'],
            ['id' => 23589, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Miguel Tepezontes', 'active' => 1, 'slug' => 'san-miguel-tepezontes'],
            ['id' => 23590, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Pedro Masahuat', 'active' => 1, 'slug' => 'san-pedro-masahuat'],
            ['id' => 23591, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Pedro Nonualco', 'active' => 1, 'slug' => 'san-pedro-nonualco'],
            ['id' => 23592, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'San Rafael Obrajuelo', 'active' => 1, 'slug' => 'san-rafael-obrajuelo'],
            ['id' => 23593, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'Santa María Ostuma', 'active' => 1, 'slug' => 'santa-maria-ostuma'],
            ['id' => 23594, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'Santiago Nonualco', 'active' => 1, 'slug' => 'santiago-nonualco'],
            ['id' => 23595, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'Tapalhuaca', 'active' => 1, 'slug' => 'tapalhuaca'],
            ['id' => 23596, 'region_id' => 707153, 'country_code' => 'SV', 'name' => 'Zacatecoluca', 'active' => 1, 'slug' => 'zacatecoluca'],
            ['id' => 23650, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'Apastepeque', 'active' => 1, 'slug' => 'apastepeque'],
            ['id' => 23651, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'Guadalupe', 'active' => 1, 'slug' => 'guadalupe'],
            ['id' => 23652, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'Nuevo Tepetitán', 'active' => 1, 'slug' => 'nuevo-tepetitan'],
            ['id' => 23653, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'San Cayetano Istepeque', 'active' => 1, 'slug' => 'san-cayetano-istepeque'],
            ['id' => 23654, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'San Esteban Catarina', 'active' => 1, 'slug' => 'san-esteban-catarina'],
            ['id' => 23655, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'San Ildefonso', 'active' => 1, 'slug' => 'san-ildefonso'],
            ['id' => 23656, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'San Lorenzo', 'active' => 1, 'slug' => 'san-lorenzo'],
            ['id' => 23657, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'San Sebastián', 'active' => 1, 'slug' => 'san-sebastian'],
            ['id' => 23658, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'San Vicente', 'active' => 1, 'slug' => 'san-vicente'],
            ['id' => 23659, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'Santa Clara', 'active' => 1, 'slug' => 'santa-clara'],
            ['id' => 23660, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'Santo Domingo', 'active' => 1, 'slug' => 'santo-domingo'],
            ['id' => 23661, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'Tecoluca', 'active' => 1, 'slug' => 'tecoluca'],
            ['id' => 23662, 'region_id' => 707154, 'country_code' => 'SV', 'name' => 'Verapaz', 'active' => 1, 'slug' => 'verapaz'],
            ['id' => 23494, 'region_id' => 707155, 'country_code' => 'SV', 'name' => 'Cinquera', 'active' => 1, 'slug' => 'cinquera'],
            ['id' => 23495, 'region_id' => 707155, 'country_code' => 'SV', 'name' => 'Dolores', 'active' => 1, 'slug' => 'dolores'],
            ['id' => 23496, 'region_id' => 707155, 'country_code' => 'SV', 'name' => 'Guacotecti', 'active' => 1, 'slug' => 'guacotecti'],
            ['id' => 23497, 'region_id' => 707155, 'country_code' => 'SV', 'name' => 'Ilobasco', 'active' => 1, 'slug' => 'ilobasco'],
            ['id' => 23498, 'region_id' => 707155, 'country_code' => 'SV', 'name' => 'Jutiapa', 'active' => 1, 'slug' => 'jutiapa'],
            ['id' => 23499, 'region_id' => 707155, 'country_code' => 'SV', 'name' => 'San Isidro', 'active' => 1, 'slug' => 'san-isidro'],
            ['id' => 23500, 'region_id' => 707155, 'country_code' => 'SV', 'name' => 'Sensuntepeque', 'active' => 1, 'slug' => 'sensuntepeque'],
            ['id' => 23501, 'region_id' => 707155, 'country_code' => 'SV', 'name' => 'Tejutepeque', 'active' => 1, 'slug' => 'tejutepeque'],
            ['id' => 23502, 'region_id' => 707155, 'country_code' => 'SV', 'name' => 'Victoria', 'active' => 1, 'slug' => 'victoria'],
            ['id' => 23631, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Aguilares', 'active' => 1, 'slug' => 'aguilares'],
            ['id' => 23632, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Apopa', 'active' => 1, 'slug' => 'apopa'],
            ['id' => 23633, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Ayutuxtepeque', 'active' => 1, 'slug' => 'ayutuxtepeque'],
            ['id' => 23634, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Ciudad Delgado', 'active' => 1, 'slug' => 'ciudad-delgado'],
            ['id' => 23635, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Cuscatancingo', 'active' => 1, 'slug' => 'cuscatancingo'],
            ['id' => 23636, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'El Paisnal', 'active' => 1, 'slug' => 'el-paisnal'],
            ['id' => 23637, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Guazapa', 'active' => 1, 'slug' => 'guazapa'],
            ['id' => 23638, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Ilopango', 'active' => 1, 'slug' => 'ilopango'],
            ['id' => 23639, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Mejicanos', 'active' => 1, 'slug' => 'mejicanos'],
            ['id' => 23640, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Nejapa', 'active' => 1, 'slug' => 'nejapa'],
            ['id' => 23641, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Panchimalco', 'active' => 1, 'slug' => 'panchimalco'],
            ['id' => 23642, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Rosario de Mora', 'active' => 1, 'slug' => 'rosario-de-mora'],
            ['id' => 23643, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'San Marcos', 'active' => 1, 'slug' => 'san-marcos'],
            ['id' => 23644, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'San Martín', 'active' => 1, 'slug' => 'san-martin'],
            ['id' => 23645, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'San Salvador', 'active' => 1, 'slug' => 'san-salvador'],
            ['id' => 23646, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Santiago Texacuangos', 'active' => 1, 'slug' => 'santiago-texacuangos'],
            ['id' => 23647, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Santo Tomás', 'active' => 1, 'slug' => 'santo-tomas'],
            ['id' => 23648, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Soyapango', 'active' => 1, 'slug' => 'soyapango'],
            ['id' => 23649, 'region_id' => 707156, 'country_code' => 'SV', 'name' => 'Tonacatepeque', 'active' => 1, 'slug' => 'tonacatepeque'],
            ['id' => 23537, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'Candelaria', 'active' => 1, 'slug' => 'candelaria'],
            ['id' => 23538, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'Cojutepeque', 'active' => 1, 'slug' => 'cojutepeque'],
            ['id' => 23539, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'Cuscatlán', 'active' => 1, 'slug' => 'cuscatlan'],
            ['id' => 23540, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'El Carmen', 'active' => 1, 'slug' => 'el-carmen'],
            ['id' => 23541, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'El Rosario', 'active' => 1, 'slug' => 'el-rosario'],
            ['id' => 23542, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'Monte San Juan', 'active' => 1, 'slug' => 'monte-san-juan'],
            ['id' => 23543, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'Oratorio de Concepción', 'active' => 1, 'slug' => 'oratorio-de-concepcion'],
            ['id' => 23544, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'San Bartolomé Perulapía', 'active' => 1, 'slug' => 'san-bartolome-perulapia'],
            ['id' => 23545, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'San Cristóbal', 'active' => 1, 'slug' => 'san-cristobal'],
            ['id' => 23546, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'San José Guayabal', 'active' => 1, 'slug' => 'san-jose-guayabal'],
            ['id' => 23547, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'San Pedro Perulapán', 'active' => 1, 'slug' => 'san-pedro-perulapan'],
            ['id' => 23548, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'San Rafael Cedros', 'active' => 1, 'slug' => 'san-rafael-cedros'],
            ['id' => 23549, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'San Ramón', 'active' => 1, 'slug' => 'san-ramon'],
            ['id' => 23550, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'Santa Cruz Analquito', 'active' => 1, 'slug' => 'santa-cruz-analquito'],
            ['id' => 23551, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'Santa Cruz Michapa', 'active' => 1, 'slug' => 'santa-cruz-michapa'],
            ['id' => 23552, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'Suchitoto', 'active' => 1, 'slug' => 'suchitoto'],
            ['id' => 23553, 'region_id' => 707157, 'country_code' => 'SV', 'name' => 'Tenancingo', 'active' => 1, 'slug' => 'tenancingo'],
            ['id' => 23554, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Antiguo Cuscatlán', 'active' => 1, 'slug' => 'antiguo-cuscatlan'],
            ['id' => 23555, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Chiltiupán', 'active' => 1, 'slug' => 'chiltiupan'],
            ['id' => 23556, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Ciudad Arce', 'active' => 1, 'slug' => 'ciudad-arce'],
            ['id' => 23557, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Colón', 'active' => 1, 'slug' => 'colon'],
            ['id' => 23558, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Comayagua', 'active' => 1, 'slug' => 'comayagua'],
            ['id' => 23559, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Huizúcar', 'active' => 1, 'slug' => 'huizucar'],
            ['id' => 23560, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Jayaque', 'active' => 1, 'slug' => 'jayaque'],
            ['id' => 23561, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Jicalapa', 'active' => 1, 'slug' => 'jicalapa'],
            ['id' => 23562, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Nueva San Salvador', 'active' => 1, 'slug' => 'nueva-san-salvador'],
            ['id' => 23563, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Nuevo Cuscatlán', 'active' => 1, 'slug' => 'nuevo-cuscatlan'],
            ['id' => 23564, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Puerto de la Libertad', 'active' => 1, 'slug' => 'puerto-de-la-libertad'],
            ['id' => 23565, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Quezaltepeque', 'active' => 1, 'slug' => 'quezaltepeque'],
            ['id' => 23566, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Sacacoyo', 'active' => 1, 'slug' => 'sacacoyo'],
            ['id' => 23567, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'San José Villanueva', 'active' => 1, 'slug' => 'san-jose-villanueva'],
            ['id' => 23568, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'San Juan Opico', 'active' => 1, 'slug' => 'san-juan-opico'],
            ['id' => 23569, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'San Matías', 'active' => 1, 'slug' => 'san-matias'],
            ['id' => 23570, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'San Pablo Tacachico', 'active' => 1, 'slug' => 'san-pablo-tacachico'],
            ['id' => 23571, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Talnique', 'active' => 1, 'slug' => 'talnique'],
            ['id' => 23572, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Tamanique', 'active' => 1, 'slug' => 'tamanique'],
            ['id' => 23573, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Tepecoyo', 'active' => 1, 'slug' => 'tepecoyo'],
            ['id' => 23574, 'region_id' => 708025, 'country_code' => 'SV', 'name' => 'Zaragoza', 'active' => 1, 'slug' => 'zaragoza'],
            ['id' => 23597, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Anamorós', 'active' => 1, 'slug' => 'anamoros'],
            ['id' => 23598, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Bolívar', 'active' => 1, 'slug' => 'bolivar'],
            ['id' => 23599, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Concepción de Oriente', 'active' => 1, 'slug' => 'concepcion-de-oriente'],
            ['id' => 23600, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Conchagua', 'active' => 1, 'slug' => 'conchagua'],
            ['id' => 23601, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'El Carmen', 'active' => 1, 'slug' => 'el-carmen'],
            ['id' => 23602, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'El Sauce', 'active' => 1, 'slug' => 'el-sauce'],
            ['id' => 23603, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Intipucá', 'active' => 1, 'slug' => 'intipuca'],
            ['id' => 23604, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'La Unión', 'active' => 1, 'slug' => 'la-union'],
            ['id' => 23605, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Lislique', 'active' => 1, 'slug' => 'lislique'],
            ['id' => 23606, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Meanguera Del Golfo', 'active' => 1, 'slug' => 'meanguera-del-golfo'],
            ['id' => 23607, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Nueva Esparta', 'active' => 1, 'slug' => 'nueva-esparta'],
            ['id' => 23608, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Pasaquina', 'active' => 1, 'slug' => 'pasaquina'],
            ['id' => 23609, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Polorós', 'active' => 1, 'slug' => 'poloros'],
            ['id' => 23610, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'San Alejo', 'active' => 1, 'slug' => 'san-alejo'],
            ['id' => 23611, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'San José la Fuente', 'active' => 1, 'slug' => 'san-jose-la-fuente'],
            ['id' => 23612, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Santa Rosa de Lima', 'active' => 1, 'slug' => 'santa-rosa-de-lima'],
            ['id' => 23613, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Yayantique', 'active' => 1, 'slug' => 'yayantique'],
            ['id' => 23614, 'region_id' => 708070, 'country_code' => 'SV', 'name' => 'Yucualquín', 'active' => 1, 'slug' => 'yucualquin'],
            ['id' => 23621, 'region_id' => 708096, 'country_code' => 'SV', 'name' => 'Chapeltique', 'active' => 1, 'slug' => 'chapeltique'],
            ['id' => 23622, 'region_id' => 708096, 'country_code' => 'SV', 'name' => 'Chinameca', 'active' => 1, 'slug' => 'chinameca'],
            ['id' => 23623, 'region_id' => 708096, 'country_code' => 'SV', 'name' => 'Chirilagua', 'active' => 1, 'slug' => 'chirilagua'],
            ['id' => 23624, 'region_id' => 708096, 'country_code' => 'SV', 'name' => 'Comacarán', 'active' => 1, 'slug' => 'comacaran'],
            ['id' => 23625, 'region_id' => 708096, 'country_code' => 'SV', 'name' => 'Moncagua', 'active' => 1, 'slug' => 'moncagua'],
            ['id' => 23626, 'region_id' => 708096, 'country_code' => 'SV', 'name' => 'Nueva Guadalupe', 'active' => 1, 'slug' => 'nueva-guadalupe'],
            ['id' => 23627, 'region_id' => 708096, 'country_code' => 'SV', 'name' => 'Quelepa', 'active' => 1, 'slug' => 'quelepa'],
            ['id' => 23628, 'region_id' => 708096, 'country_code' => 'SV', 'name' => 'San Miguel', 'active' => 1, 'slug' => 'san-miguel'],
            ['id' => 23629, 'region_id' => 708096, 'country_code' => 'SV', 'name' => 'San Rafael Oriente', 'active' => 1, 'slug' => 'san-rafael-oriente'],
            ['id' => 23630, 'region_id' => 708096, 'country_code' => 'SV', 'name' => 'Uluazapa', 'active' => 1, 'slug' => 'uluazapa'],
            ['id' => 23676, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Acajutla', 'active' => 1, 'slug' => 'acajutla'],
            ['id' => 23677, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Armenia', 'active' => 1, 'slug' => 'armenia'],
            ['id' => 23678, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Caluco', 'active' => 1, 'slug' => 'caluco'],
            ['id' => 23679, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Cuisnahuat', 'active' => 1, 'slug' => 'cuisnahuat'],
            ['id' => 23680, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Izalco', 'active' => 1, 'slug' => 'izalco'],
            ['id' => 23681, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Juayúa', 'active' => 1, 'slug' => 'juayua'],
            ['id' => 23682, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Nahuilingo', 'active' => 1, 'slug' => 'nahuilingo'],
            ['id' => 23683, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Nahuizalco', 'active' => 1, 'slug' => 'nahuizalco'],
            ['id' => 23684, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Salcoatitán', 'active' => 1, 'slug' => 'salcoatitan'],
            ['id' => 23685, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'San Antonio Del Monte', 'active' => 1, 'slug' => 'san-antonio-del-monte'],
            ['id' => 23686, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'San Julián', 'active' => 1, 'slug' => 'san-julian'],
            ['id' => 23687, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Santa Catarina Masahuat', 'active' => 1, 'slug' => 'santa-catarina-masahuat'],
            ['id' => 23688, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Santa Isabel Ishuatán', 'active' => 1, 'slug' => 'santa-isabel-ishuatan'],
            ['id' => 23689, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Sonsonete', 'active' => 1, 'slug' => 'sonsonete'],
            ['id' => 23690, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Sonzacate', 'active' => 1, 'slug' => 'sonzacate'],
            ['id' => 23691, 'region_id' => 708155, 'country_code' => 'SV', 'name' => 'Sto. Domingo de Guzmán', 'active' => 1, 'slug' => 'sto-domingo-de-guzman']
    	];
    }
}
