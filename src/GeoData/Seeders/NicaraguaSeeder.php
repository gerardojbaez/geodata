<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class NicaraguaSeeder extends Seeder
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
    	return ['code' => 'NI', 'name' => 'Nicaragua', 'slug' => 'nicaragua'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 868, 'country_code' => 'NI', 'name' => 'Managua', 'active' => 1, 'slug' => 'managua'],
            ['id' => 707257, 'country_code' => 'NI', 'name' => 'Boaco', 'active' => 1, 'slug' => 'boaco'],
            ['id' => 707258, 'country_code' => 'NI', 'name' => 'Carazo', 'active' => 1, 'slug' => 'carazo'],
            ['id' => 707259, 'country_code' => 'NI', 'name' => 'Chinandega', 'active' => 1, 'slug' => 'chinandega'],
            ['id' => 707260, 'country_code' => 'NI', 'name' => 'Chontales', 'active' => 1, 'slug' => 'chontales'],
            ['id' => 707261, 'country_code' => 'NI', 'name' => 'Estelí', 'active' => 1, 'slug' => 'esteli'],
            ['id' => 707263, 'country_code' => 'NI', 'name' => 'Jinotega', 'active' => 1, 'slug' => 'jinotega'],
            ['id' => 707265, 'country_code' => 'NI', 'name' => 'Madriz', 'active' => 1, 'slug' => 'madriz'],
            ['id' => 707267, 'country_code' => 'NI', 'name' => 'Masaya', 'active' => 1, 'slug' => 'masaya'],
            ['id' => 707268, 'country_code' => 'NI', 'name' => 'Matagalpa', 'active' => 1, 'slug' => 'matagalpa'],
            ['id' => 707269, 'country_code' => 'NI', 'name' => 'Nueva Segovia', 'active' => 1, 'slug' => 'nueva-segovia'],
            ['id' => 707270, 'country_code' => 'NI', 'name' => 'Rivas', 'active' => 1, 'slug' => 'rivas'],
            ['id' => 707271, 'country_code' => 'NI', 'name' => 'Río San Juan', 'active' => 1, 'slug' => 'rio-san-juan'],
            ['id' => 711859, 'country_code' => 'NI', 'name' => 'Granada', 'active' => 1, 'slug' => 'granada'],
            ['id' => 711874, 'country_code' => 'NI', 'name' => 'Leon', 'active' => 1, 'slug' => 'leon'],
            ['id' => 711964, 'country_code' => 'NI', 'name' => 'Región Autonoma del Atlantico Norte', 'active' => 1, 'slug' => 'region-autonoma-del-atlantico-norte'],
            ['id' => 711972, 'country_code' => 'NI', 'name' => 'Región Autonoma del Atlantico Sur', 'active' => 1, 'slug' => 'region-autonoma-del-atlantico-sur']
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
            ['id' => 24935, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'Ciudad Sandino', 'active' => 1, 'slug' => 'ciudad-sandino'],
            ['id' => 24936, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'El Crucero', 'active' => 1, 'slug' => 'el-crucero'],
            ['id' => 24937, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'Fonseca', 'active' => 1, 'slug' => 'fonseca'],
            ['id' => 24938, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'Libre', 'active' => 1, 'slug' => 'libre'],
            ['id' => 24939, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'Managua', 'active' => 1, 'slug' => 'managua'],
            ['id' => 24940, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'Mateare', 'active' => 1, 'slug' => 'mateare'],
            ['id' => 24941, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'San Francisco Libre', 'active' => 1, 'slug' => 'san-francisco-libre'],
            ['id' => 24942, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'San Rafael del Sur', 'active' => 1, 'slug' => 'san-rafael-del-sur'],
            ['id' => 24943, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'Ticuantepe', 'active' => 1, 'slug' => 'ticuantepe'],
            ['id' => 24944, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'Tititapa', 'active' => 1, 'slug' => 'tititapa'],
            ['id' => 24945, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'Villa Carlos', 'active' => 1, 'slug' => 'villa-carlos'],
            ['id' => 24946, 'region_id' => 868, 'country_code' => 'NI', 'name' => 'Villa Carlos Fonseca', 'active' => 1, 'slug' => 'villa-carlos-fonseca'],
            ['id' => 24854, 'region_id' => 707257, 'country_code' => 'NI', 'name' => 'Boaco', 'active' => 1, 'slug' => 'boaco'],
            ['id' => 24855, 'region_id' => 707257, 'country_code' => 'NI', 'name' => 'Camoapa', 'active' => 1, 'slug' => 'camoapa'],
            ['id' => 24856, 'region_id' => 707257, 'country_code' => 'NI', 'name' => 'San José de los Remates', 'active' => 1, 'slug' => 'san-jose-de-los-remates'],
            ['id' => 24857, 'region_id' => 707257, 'country_code' => 'NI', 'name' => 'San Lorenzo', 'active' => 1, 'slug' => 'san-lorenzo'],
            ['id' => 24858, 'region_id' => 707257, 'country_code' => 'NI', 'name' => 'Santa Lucía', 'active' => 1, 'slug' => 'santa-lucia'],
            ['id' => 24859, 'region_id' => 707257, 'country_code' => 'NI', 'name' => 'Teustepe', 'active' => 1, 'slug' => 'teustepe'],
            ['id' => 24860, 'region_id' => 707258, 'country_code' => 'NI', 'name' => 'Diriamba', 'active' => 1, 'slug' => 'diriamba'],
            ['id' => 24861, 'region_id' => 707258, 'country_code' => 'NI', 'name' => 'Dolores', 'active' => 1, 'slug' => 'dolores'],
            ['id' => 24862, 'region_id' => 707258, 'country_code' => 'NI', 'name' => 'El Rosario', 'active' => 1, 'slug' => 'el-rosario'],
            ['id' => 24863, 'region_id' => 707258, 'country_code' => 'NI', 'name' => 'Jinotepe', 'active' => 1, 'slug' => 'jinotepe'],
            ['id' => 24864, 'region_id' => 707258, 'country_code' => 'NI', 'name' => 'La Conquiista', 'active' => 1, 'slug' => 'la-conquiista'],
            ['id' => 24865, 'region_id' => 707258, 'country_code' => 'NI', 'name' => 'La Paz de Oriente', 'active' => 1, 'slug' => 'la-paz-de-oriente'],
            ['id' => 24866, 'region_id' => 707258, 'country_code' => 'NI', 'name' => 'San Marcos', 'active' => 1, 'slug' => 'san-marcos'],
            ['id' => 24867, 'region_id' => 707258, 'country_code' => 'NI', 'name' => 'Santa Teresa', 'active' => 1, 'slug' => 'santa-teresa'],
            ['id' => 24868, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'Chichigalpa', 'active' => 1, 'slug' => 'chichigalpa'],
            ['id' => 24869, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'Chinandega', 'active' => 1, 'slug' => 'chinandega'],
            ['id' => 24870, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'Cinco Pinos', 'active' => 1, 'slug' => 'cinco-pinos'],
            ['id' => 24871, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'Corinto', 'active' => 1, 'slug' => 'corinto'],
            ['id' => 24872, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'Cuajiniquilapa', 'active' => 1, 'slug' => 'cuajiniquilapa'],
            ['id' => 24873, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'El Realejo', 'active' => 1, 'slug' => 'el-realejo'],
            ['id' => 24874, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'El Viejo', 'active' => 1, 'slug' => 'el-viejo'],
            ['id' => 24875, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'Posotelga', 'active' => 1, 'slug' => 'posotelga'],
            ['id' => 24876, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'Puerto Morazan', 'active' => 1, 'slug' => 'puerto-morazan'],
            ['id' => 24877, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'San Francisco', 'active' => 1, 'slug' => 'san-francisco'],
            ['id' => 24878, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'San Pedro de Potrero Grande', 'active' => 1, 'slug' => 'san-pedro-de-potrero-grande'],
            ['id' => 24879, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'Santo Tomas Del Nance', 'active' => 1, 'slug' => 'santo-tomas-del-nance'],
            ['id' => 24880, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'Sootillo', 'active' => 1, 'slug' => 'sootillo'],
            ['id' => 24881, 'region_id' => 707259, 'country_code' => 'NI', 'name' => 'Villanueva', 'active' => 1, 'slug' => 'villanueva'],
            ['id' => 24882, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'Acoyapa', 'active' => 1, 'slug' => 'acoyapa'],
            ['id' => 24883, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'Comalapa', 'active' => 1, 'slug' => 'comalapa'],
            ['id' => 24884, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'Cuapa', 'active' => 1, 'slug' => 'cuapa'],
            ['id' => 24885, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'El Ayote', 'active' => 1, 'slug' => 'el-ayote'],
            ['id' => 24886, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'El Coral', 'active' => 1, 'slug' => 'el-coral'],
            ['id' => 24887, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'El Rama', 'active' => 1, 'slug' => 'el-rama'],
            ['id' => 24888, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'Juigalpa', 'active' => 1, 'slug' => 'juigalpa'],
            ['id' => 24889, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'La Libertad', 'active' => 1, 'slug' => 'la-libertad'],
            ['id' => 24890, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'Mueye de los Bueyes', 'active' => 1, 'slug' => 'mueye-de-los-bueyes'],
            ['id' => 24891, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'Nueva Guinea', 'active' => 1, 'slug' => 'nueva-guinea'],
            ['id' => 24892, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'San Pedro de Lóvago', 'active' => 1, 'slug' => 'san-pedro-de-lovago'],
            ['id' => 24893, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'Santo Domingo', 'active' => 1, 'slug' => 'santo-domingo'],
            ['id' => 24894, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'Santo Tomás', 'active' => 1, 'slug' => 'santo-tomas'],
            ['id' => 24895, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'Villa San Francisco', 'active' => 1, 'slug' => 'villa-san-francisco'],
            ['id' => 24896, 'region_id' => 707260, 'country_code' => 'NI', 'name' => 'Villa Sandino', 'active' => 1, 'slug' => 'villa-sandino'],
            ['id' => 24897, 'region_id' => 707261, 'country_code' => 'NI', 'name' => 'Condega', 'active' => 1, 'slug' => 'condega'],
            ['id' => 24898, 'region_id' => 707261, 'country_code' => 'NI', 'name' => 'Estelí', 'active' => 1, 'slug' => 'esteli'],
            ['id' => 24899, 'region_id' => 707261, 'country_code' => 'NI', 'name' => 'La Trinidad', 'active' => 1, 'slug' => 'la-trinidad'],
            ['id' => 24900, 'region_id' => 707261, 'country_code' => 'NI', 'name' => 'Pueblo Nuevo', 'active' => 1, 'slug' => 'pueblo-nuevo'],
            ['id' => 24901, 'region_id' => 707261, 'country_code' => 'NI', 'name' => 'San Juan de Limay', 'active' => 1, 'slug' => 'san-juan-de-limay'],
            ['id' => 24902, 'region_id' => 707261, 'country_code' => 'NI', 'name' => 'San Nicolás', 'active' => 1, 'slug' => 'san-nicolas'],
            ['id' => 24907, 'region_id' => 707263, 'country_code' => 'NI', 'name' => 'Cuá Bocay', 'active' => 1, 'slug' => 'cua-bocay'],
            ['id' => 24908, 'region_id' => 707263, 'country_code' => 'NI', 'name' => 'Jinotega', 'active' => 1, 'slug' => 'jinotega'],
            ['id' => 24909, 'region_id' => 707263, 'country_code' => 'NI', 'name' => 'La Concordia', 'active' => 1, 'slug' => 'la-concordia'],
            ['id' => 24910, 'region_id' => 707263, 'country_code' => 'NI', 'name' => 'Pantasma', 'active' => 1, 'slug' => 'pantasma'],
            ['id' => 24911, 'region_id' => 707263, 'country_code' => 'NI', 'name' => 'San Rafael Del Norte', 'active' => 1, 'slug' => 'san-rafael-del-norte'],
            ['id' => 24912, 'region_id' => 707263, 'country_code' => 'NI', 'name' => 'San Sebastián de Yalí', 'active' => 1, 'slug' => 'san-sebastian-de-yali'],
            ['id' => 24913, 'region_id' => 707263, 'country_code' => 'NI', 'name' => 'Santa María de Pantasma', 'active' => 1, 'slug' => 'santa-maria-de-pantasma'],
            ['id' => 24914, 'region_id' => 707263, 'country_code' => 'NI', 'name' => 'Wiwilí', 'active' => 1, 'slug' => 'wiwili'],
            ['id' => 24915, 'region_id' => 707263, 'country_code' => 'NI', 'name' => 'Yalí', 'active' => 1, 'slug' => 'yali'],
            ['id' => 24926, 'region_id' => 707265, 'country_code' => 'NI', 'name' => 'Las Sabanas', 'active' => 1, 'slug' => 'las-sabanas'],
            ['id' => 24927, 'region_id' => 707265, 'country_code' => 'NI', 'name' => 'Palacaguina', 'active' => 1, 'slug' => 'palacaguina'],
            ['id' => 24928, 'region_id' => 707265, 'country_code' => 'NI', 'name' => 'San José de Cusmapa', 'active' => 1, 'slug' => 'san-jose-de-cusmapa'],
            ['id' => 24929, 'region_id' => 707265, 'country_code' => 'NI', 'name' => 'San Juan de Río', 'active' => 1, 'slug' => 'san-juan-de-rio'],
            ['id' => 24930, 'region_id' => 707265, 'country_code' => 'NI', 'name' => 'San Juan de Río Coco', 'active' => 1, 'slug' => 'san-juan-de-rio-coco'],
            ['id' => 24931, 'region_id' => 707265, 'country_code' => 'NI', 'name' => 'San Lucas', 'active' => 1, 'slug' => 'san-lucas'],
            ['id' => 24932, 'region_id' => 707265, 'country_code' => 'NI', 'name' => 'Somoto', 'active' => 1, 'slug' => 'somoto'],
            ['id' => 24933, 'region_id' => 707265, 'country_code' => 'NI', 'name' => 'Telpaneca', 'active' => 1, 'slug' => 'telpaneca'],
            ['id' => 24934, 'region_id' => 707265, 'country_code' => 'NI', 'name' => 'Totogalpa', 'active' => 1, 'slug' => 'totogalpa'],
            ['id' => 24947, 'region_id' => 707267, 'country_code' => 'NI', 'name' => 'Catarina', 'active' => 1, 'slug' => 'catarina'],
            ['id' => 24948, 'region_id' => 707267, 'country_code' => 'NI', 'name' => 'La Concepcion', 'active' => 1, 'slug' => 'la-concepcion'],
            ['id' => 24949, 'region_id' => 707267, 'country_code' => 'NI', 'name' => 'Masatepe', 'active' => 1, 'slug' => 'masatepe'],
            ['id' => 24950, 'region_id' => 707267, 'country_code' => 'NI', 'name' => 'Masaya', 'active' => 1, 'slug' => 'masaya'],
            ['id' => 24951, 'region_id' => 707267, 'country_code' => 'NI', 'name' => 'Nandasmo', 'active' => 1, 'slug' => 'nandasmo'],
            ['id' => 24952, 'region_id' => 707267, 'country_code' => 'NI', 'name' => 'Nindiri', 'active' => 1, 'slug' => 'nindiri'],
            ['id' => 24953, 'region_id' => 707267, 'country_code' => 'NI', 'name' => 'Niquinohomo', 'active' => 1, 'slug' => 'niquinohomo'],
            ['id' => 24954, 'region_id' => 707267, 'country_code' => 'NI', 'name' => 'San Juan de Oriente', 'active' => 1, 'slug' => 'san-juan-de-oriente'],
            ['id' => 24955, 'region_id' => 707267, 'country_code' => 'NI', 'name' => 'Tisma', 'active' => 1, 'slug' => 'tisma'],
            ['id' => 24956, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'Ciudad Darío', 'active' => 1, 'slug' => 'ciudad-dario'],
            ['id' => 24957, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'Esquipulas', 'active' => 1, 'slug' => 'esquipulas'],
            ['id' => 24958, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'Matagalpa', 'active' => 1, 'slug' => 'matagalpa'],
            ['id' => 24959, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'Matiguás', 'active' => 1, 'slug' => 'matiguas'],
            ['id' => 24960, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'Muy Muy', 'active' => 1, 'slug' => 'muy-muy'],
            ['id' => 24961, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'Rancho Grande', 'active' => 1, 'slug' => 'rancho-grande'],
            ['id' => 24962, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'Río Blanco', 'active' => 1, 'slug' => 'rio-blanco'],
            ['id' => 24963, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'San Dionisio', 'active' => 1, 'slug' => 'san-dionisio'],
            ['id' => 24964, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'San Isidro', 'active' => 1, 'slug' => 'san-isidro'],
            ['id' => 24965, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'San Ramón', 'active' => 1, 'slug' => 'san-ramon'],
            ['id' => 24966, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'Sébaco', 'active' => 1, 'slug' => 'sebaco'],
            ['id' => 24967, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'Terrabona', 'active' => 1, 'slug' => 'terrabona'],
            ['id' => 24968, 'region_id' => 707268, 'country_code' => 'NI', 'name' => 'Tuma la Dalia', 'active' => 1, 'slug' => 'tuma-la-dalia'],
            ['id' => 24969, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'Ciudad Antigua', 'active' => 1, 'slug' => 'ciudad-antigua'],
            ['id' => 24970, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'Dipilto', 'active' => 1, 'slug' => 'dipilto'],
            ['id' => 24971, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'El Jícaro', 'active' => 1, 'slug' => 'el-jicaro'],
            ['id' => 24972, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'Jalapa', 'active' => 1, 'slug' => 'jalapa'],
            ['id' => 24973, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'Macuelizo', 'active' => 1, 'slug' => 'macuelizo'],
            ['id' => 24974, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'Mozonte', 'active' => 1, 'slug' => 'mozonte'],
            ['id' => 24975, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'Murra', 'active' => 1, 'slug' => 'murra'],
            ['id' => 24976, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'Ocotal', 'active' => 1, 'slug' => 'ocotal'],
            ['id' => 24977, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'Quilalí', 'active' => 1, 'slug' => 'quilali'],
            ['id' => 24978, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'San Fernando', 'active' => 1, 'slug' => 'san-fernando'],
            ['id' => 24979, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'Santa María', 'active' => 1, 'slug' => 'santa-maria'],
            ['id' => 24980, 'region_id' => 707269, 'country_code' => 'NI', 'name' => 'Wiwili', 'active' => 1, 'slug' => 'wiwili'],
            ['id' => 24981, 'region_id' => 707270, 'country_code' => 'NI', 'name' => 'Altagracia', 'active' => 1, 'slug' => 'altagracia'],
            ['id' => 24982, 'region_id' => 707270, 'country_code' => 'NI', 'name' => 'Belen', 'active' => 1, 'slug' => 'belen'],
            ['id' => 24983, 'region_id' => 707270, 'country_code' => 'NI', 'name' => 'Buenos Aires', 'active' => 1, 'slug' => 'buenos-aires'],
            ['id' => 24984, 'region_id' => 707270, 'country_code' => 'NI', 'name' => 'Cardenas', 'active' => 1, 'slug' => 'cardenas'],
            ['id' => 24985, 'region_id' => 707270, 'country_code' => 'NI', 'name' => 'Moyogalpa', 'active' => 1, 'slug' => 'moyogalpa'],
            ['id' => 24986, 'region_id' => 707270, 'country_code' => 'NI', 'name' => 'Potosi', 'active' => 1, 'slug' => 'potosi'],
            ['id' => 24987, 'region_id' => 707270, 'country_code' => 'NI', 'name' => 'Rivas', 'active' => 1, 'slug' => 'rivas'],
            ['id' => 24988, 'region_id' => 707270, 'country_code' => 'NI', 'name' => 'San Jorge', 'active' => 1, 'slug' => 'san-jorge'],
            ['id' => 24989, 'region_id' => 707270, 'country_code' => 'NI', 'name' => 'San Juan Del Sur', 'active' => 1, 'slug' => 'san-juan-del-sur'],
            ['id' => 24990, 'region_id' => 707270, 'country_code' => 'NI', 'name' => 'Tola', 'active' => 1, 'slug' => 'tola'],
            ['id' => 24991, 'region_id' => 707271, 'country_code' => 'NI', 'name' => 'El Almendro', 'active' => 1, 'slug' => 'el-almendro'],
            ['id' => 24992, 'region_id' => 707271, 'country_code' => 'NI', 'name' => 'El Castillo', 'active' => 1, 'slug' => 'el-castillo'],
            ['id' => 24993, 'region_id' => 707271, 'country_code' => 'NI', 'name' => 'Morrito', 'active' => 1, 'slug' => 'morrito'],
            ['id' => 24994, 'region_id' => 707271, 'country_code' => 'NI', 'name' => 'San Carlos', 'active' => 1, 'slug' => 'san-carlos'],
            ['id' => 24995, 'region_id' => 707271, 'country_code' => 'NI', 'name' => 'San Juan Del Norte', 'active' => 1, 'slug' => 'san-juan-del-norte'],
            ['id' => 24996, 'region_id' => 707271, 'country_code' => 'NI', 'name' => 'San Miguelito', 'active' => 1, 'slug' => 'san-miguelito'],
            ['id' => 24903, 'region_id' => 711859, 'country_code' => 'NI', 'name' => 'Diria', 'active' => 1, 'slug' => 'diria'],
            ['id' => 24904, 'region_id' => 711859, 'country_code' => 'NI', 'name' => 'Diriomo', 'active' => 1, 'slug' => 'diriomo'],
            ['id' => 24905, 'region_id' => 711859, 'country_code' => 'NI', 'name' => 'Granada', 'active' => 1, 'slug' => 'granada'],
            ['id' => 24906, 'region_id' => 711859, 'country_code' => 'NI', 'name' => 'Nandaime', 'active' => 1, 'slug' => 'nandaime'],
            ['id' => 24916, 'region_id' => 711874, 'country_code' => 'NI', 'name' => 'Achuapa', 'active' => 1, 'slug' => 'achuapa'],
            ['id' => 24917, 'region_id' => 711874, 'country_code' => 'NI', 'name' => 'El Jiracal', 'active' => 1, 'slug' => 'el-jiracal'],
            ['id' => 24918, 'region_id' => 711874, 'country_code' => 'NI', 'name' => 'El Sauce', 'active' => 1, 'slug' => 'el-sauce'],
            ['id' => 24919, 'region_id' => 711874, 'country_code' => 'NI', 'name' => 'La Paz Centro', 'active' => 1, 'slug' => 'la-paz-centro'],
            ['id' => 24920, 'region_id' => 711874, 'country_code' => 'NI', 'name' => 'Larreynaga', 'active' => 1, 'slug' => 'larreynaga'],
            ['id' => 24921, 'region_id' => 711874, 'country_code' => 'NI', 'name' => 'Leon', 'active' => 1, 'slug' => 'leon'],
            ['id' => 24922, 'region_id' => 711874, 'country_code' => 'NI', 'name' => 'Nagarote', 'active' => 1, 'slug' => 'nagarote'],
            ['id' => 24923, 'region_id' => 711874, 'country_code' => 'NI', 'name' => 'Quezalguaque', 'active' => 1, 'slug' => 'quezalguaque'],
            ['id' => 24924, 'region_id' => 711874, 'country_code' => 'NI', 'name' => 'Santa Rosa Del Peñon', 'active' => 1, 'slug' => 'santa-rosa-del-penon'],
            ['id' => 24925, 'region_id' => 711874, 'country_code' => 'NI', 'name' => 'Telica', 'active' => 1, 'slug' => 'telica'],
            ['id' => 24997, 'region_id' => 711964, 'country_code' => 'NI', 'name' => 'Bonanza', 'active' => 1, 'slug' => 'bonanza'],
            ['id' => 24998, 'region_id' => 711964, 'country_code' => 'NI', 'name' => 'Prinzapolka', 'active' => 1, 'slug' => 'prinzapolka'],
            ['id' => 24999, 'region_id' => 711964, 'country_code' => 'NI', 'name' => 'Puerto Cabezas', 'active' => 1, 'slug' => 'puerto-cabezas'],
            ['id' => 25000, 'region_id' => 711964, 'country_code' => 'NI', 'name' => 'Rosita', 'active' => 1, 'slug' => 'rosita'],
            ['id' => 25001, 'region_id' => 711964, 'country_code' => 'NI', 'name' => 'Siuna', 'active' => 1, 'slug' => 'siuna'],
            ['id' => 25002, 'region_id' => 711964, 'country_code' => 'NI', 'name' => 'Walala', 'active' => 1, 'slug' => 'walala'],
            ['id' => 25003, 'region_id' => 711964, 'country_code' => 'NI', 'name' => 'Waspán', 'active' => 1, 'slug' => 'waspan'],
            ['id' => 25004, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'Bluefields', 'active' => 1, 'slug' => 'bluefields'],
            ['id' => 25005, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'Bocana de Paiwas', 'active' => 1, 'slug' => 'bocana-de-paiwas'],
            ['id' => 25006, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'Corn Island', 'active' => 1, 'slug' => 'corn-island'],
            ['id' => 25007, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'Desembocadura Río Grande', 'active' => 1, 'slug' => 'desembocadura-rio-grande'],
            ['id' => 25008, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'El Tortuguero', 'active' => 1, 'slug' => 'el-tortuguero'],
            ['id' => 25009, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'Kukra Hill', 'active' => 1, 'slug' => 'kukra-hill'],
            ['id' => 25010, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'La Cruz del Río Grande', 'active' => 1, 'slug' => 'la-cruz-del-rio-grande'],
            ['id' => 25011, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'Laguna de Perlas', 'active' => 1, 'slug' => 'laguna-de-perlas'],
            ['id' => 25012, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'Muelle de los Bueyes', 'active' => 1, 'slug' => 'muelle-de-los-bueyes'],
            ['id' => 25013, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'Nueva Guinea', 'active' => 1, 'slug' => 'nueva-guinea'],
            ['id' => 25014, 'region_id' => 711972, 'country_code' => 'NI', 'name' => 'Rama', 'active' => 1, 'slug' => 'rama']
    	];
    }
}
