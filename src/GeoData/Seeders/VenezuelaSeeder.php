<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class VenezuelaSeeder extends Seeder
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
    	return ['code' => 'VE', 'name' => 'Venezuela', 'slug' => 'venezuela'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 782648, 'country_code' => 'VE', 'name' => 'Amazonas', 'active' => 1, 'slug' => 'amazonas'],
            ['id' => 782649, 'country_code' => 'VE', 'name' => 'Anzoátegui', 'active' => 1, 'slug' => 'anzoategui'],
            ['id' => 782650, 'country_code' => 'VE', 'name' => 'Apure', 'active' => 1, 'slug' => 'apure'],
            ['id' => 782651, 'country_code' => 'VE', 'name' => 'Aragua', 'active' => 1, 'slug' => 'aragua'],
            ['id' => 782652, 'country_code' => 'VE', 'name' => 'Barinas', 'active' => 1, 'slug' => 'barinas'],
            ['id' => 782653, 'country_code' => 'VE', 'name' => 'Bolívar', 'active' => 1, 'slug' => 'bolivar'],
            ['id' => 782654, 'country_code' => 'VE', 'name' => 'Carabobo', 'active' => 1, 'slug' => 'carabobo'],
            ['id' => 782655, 'country_code' => 'VE', 'name' => 'Cojedes', 'active' => 1, 'slug' => 'cojedes'],
            ['id' => 782656, 'country_code' => 'VE', 'name' => 'Delta Amacuro', 'active' => 1, 'slug' => 'delta-amacuro'],
            ['id' => 782657, 'country_code' => 'VE', 'name' => 'Distrito Capital', 'active' => 1, 'slug' => 'distrito-capital'],
            ['id' => 782658, 'country_code' => 'VE', 'name' => 'Falcón', 'active' => 1, 'slug' => 'falcon'],
            ['id' => 782659, 'country_code' => 'VE', 'name' => 'Guarico', 'active' => 1, 'slug' => 'guarico'],
            ['id' => 782660, 'country_code' => 'VE', 'name' => 'Lara', 'active' => 1, 'slug' => 'lara'],
            ['id' => 782661, 'country_code' => 'VE', 'name' => 'Mérida', 'active' => 1, 'slug' => 'merida'],
            ['id' => 782662, 'country_code' => 'VE', 'name' => 'Miranda', 'active' => 1, 'slug' => 'miranda'],
            ['id' => 782663, 'country_code' => 'VE', 'name' => 'Monagas', 'active' => 1, 'slug' => 'monagas'],
            ['id' => 782664, 'country_code' => 'VE', 'name' => 'Nueva esparta', 'active' => 1, 'slug' => 'nueva-esparta'],
            ['id' => 782665, 'country_code' => 'VE', 'name' => 'Portuguesa', 'active' => 1, 'slug' => 'portuguesa'],
            ['id' => 782666, 'country_code' => 'VE', 'name' => 'Sucre', 'active' => 1, 'slug' => 'sucre'],
            ['id' => 782667, 'country_code' => 'VE', 'name' => 'Tachirá', 'active' => 1, 'slug' => 'tachira'],
            ['id' => 782668, 'country_code' => 'VE', 'name' => 'Trujillo', 'active' => 1, 'slug' => 'trujillo'],
            ['id' => 782669, 'country_code' => 'VE', 'name' => 'Vargas', 'active' => 1, 'slug' => 'vargas'],
            ['id' => 782670, 'country_code' => 'VE', 'name' => 'Yaracuy', 'active' => 1, 'slug' => 'yaracuy'],
            ['id' => 782671, 'country_code' => 'VE', 'name' => 'Zulia', 'active' => 1, 'slug' => 'zulia']
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
            ['id' => 452384, 'region_id' => 782648, 'country_code' => 'VE', 'name' => 'Puerto Ayacucho', 'active' => 1, 'slug' => 'puerto-ayacucho'],
            ['id' => 452385, 'region_id' => 782649, 'country_code' => 'VE', 'name' => 'Anaco', 'active' => 1, 'slug' => 'anaco'],
            ['id' => 452386, 'region_id' => 782649, 'country_code' => 'VE', 'name' => 'Barcelona', 'active' => 1, 'slug' => 'barcelona'],
            ['id' => 452387, 'region_id' => 782649, 'country_code' => 'VE', 'name' => 'Boca De Uchire', 'active' => 1, 'slug' => 'boca-de-uchire'],
            ['id' => 452388, 'region_id' => 782649, 'country_code' => 'VE', 'name' => 'Cantaura', 'active' => 1, 'slug' => 'cantaura'],
            ['id' => 452389, 'region_id' => 782649, 'country_code' => 'VE', 'name' => 'El Tigre', 'active' => 1, 'slug' => 'el-tigre'],
            ['id' => 452390, 'region_id' => 782649, 'country_code' => 'VE', 'name' => 'Lecheria', 'active' => 1, 'slug' => 'lecheria'],
            ['id' => 452391, 'region_id' => 782649, 'country_code' => 'VE', 'name' => 'Pariaguan', 'active' => 1, 'slug' => 'pariaguan'],
            ['id' => 452392, 'region_id' => 782649, 'country_code' => 'VE', 'name' => 'Puerto La Cruz', 'active' => 1, 'slug' => 'puerto-la-cruz'],
            ['id' => 452393, 'region_id' => 782649, 'country_code' => 'VE', 'name' => 'Puerto Piritu', 'active' => 1, 'slug' => 'puerto-piritu'],
            ['id' => 452394, 'region_id' => 782649, 'country_code' => 'VE', 'name' => 'San Mateo', 'active' => 1, 'slug' => 'san-mateo'],
            ['id' => 452395, 'region_id' => 782650, 'country_code' => 'VE', 'name' => 'San Fernando De Apure', 'active' => 1, 'slug' => 'san-fernando-de-apure'],
            ['id' => 452396, 'region_id' => 782651, 'country_code' => 'VE', 'name' => 'Colonia Tovar', 'active' => 1, 'slug' => 'colonia-tovar'],
            ['id' => 452397, 'region_id' => 782651, 'country_code' => 'VE', 'name' => 'La Victoria', 'active' => 1, 'slug' => 'la-victoria'],
            ['id' => 452398, 'region_id' => 782651, 'country_code' => 'VE', 'name' => 'Maracay', 'active' => 1, 'slug' => 'maracay'],
            ['id' => 452399, 'region_id' => 782651, 'country_code' => 'VE', 'name' => 'Villa De Cura', 'active' => 1, 'slug' => 'villa-de-cura'],
            ['id' => 452400, 'region_id' => 782652, 'country_code' => 'VE', 'name' => 'Barinas', 'active' => 1, 'slug' => 'barinas'],
            ['id' => 452401, 'region_id' => 782653, 'country_code' => 'VE', 'name' => 'Ciudad Bolivar', 'active' => 1, 'slug' => 'ciudad-bolivar'],
            ['id' => 452402, 'region_id' => 782653, 'country_code' => 'VE', 'name' => 'Ciudad Guayana', 'active' => 1, 'slug' => 'ciudad-guayana'],
            ['id' => 452403, 'region_id' => 782653, 'country_code' => 'VE', 'name' => 'Puerto Ordaz', 'active' => 1, 'slug' => 'puerto-ordaz'],
            ['id' => 452404, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'Bejuma', 'active' => 1, 'slug' => 'bejuma'],
            ['id' => 452405, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'El Roble', 'active' => 1, 'slug' => 'el-roble'],
            ['id' => 452406, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'Guacara', 'active' => 1, 'slug' => 'guacara'],
            ['id' => 452407, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'Guigue', 'active' => 1, 'slug' => 'guigue'],
            ['id' => 452408, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'Mariara', 'active' => 1, 'slug' => 'mariara'],
            ['id' => 452409, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'Moron', 'active' => 1, 'slug' => 'moron'],
            ['id' => 452410, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'Naguanagua', 'active' => 1, 'slug' => 'naguanagua'],
            ['id' => 452411, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'Puerto Cabello', 'active' => 1, 'slug' => 'puerto-cabello'],
            ['id' => 452412, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'San Diego', 'active' => 1, 'slug' => 'san-diego'],
            ['id' => 452413, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'San Joaquin', 'active' => 1, 'slug' => 'san-joaquin'],
            ['id' => 452414, 'region_id' => 782654, 'country_code' => 'VE', 'name' => 'Valencia', 'active' => 1, 'slug' => 'valencia'],
            ['id' => 452415, 'region_id' => 782655, 'country_code' => 'VE', 'name' => 'San Carlos', 'active' => 1, 'slug' => 'san-carlos'],
            ['id' => 452416, 'region_id' => 782656, 'country_code' => 'VE', 'name' => 'Delta Amacuro', 'active' => 1, 'slug' => 'delta-amacuro'],
            ['id' => 452417, 'region_id' => 782657, 'country_code' => 'VE', 'name' => 'Caracas', 'active' => 1, 'slug' => 'caracas'],
            ['id' => 452418, 'region_id' => 782658, 'country_code' => 'VE', 'name' => 'Coro', 'active' => 1, 'slug' => 'coro'],
            ['id' => 452419, 'region_id' => 782658, 'country_code' => 'VE', 'name' => 'Punto Fijo', 'active' => 1, 'slug' => 'punto-fijo'],
            ['id' => 452420, 'region_id' => 782658, 'country_code' => 'VE', 'name' => 'Tucacas', 'active' => 1, 'slug' => 'tucacas'],
            ['id' => 452421, 'region_id' => 782659, 'country_code' => 'VE', 'name' => 'Calabozo', 'active' => 1, 'slug' => 'calabozo'],
            ['id' => 452422, 'region_id' => 782659, 'country_code' => 'VE', 'name' => 'San Juan', 'active' => 1, 'slug' => 'san-juan'],
            ['id' => 452423, 'region_id' => 782659, 'country_code' => 'VE', 'name' => 'San Rafael de Orituco', 'active' => 1, 'slug' => 'san-rafael-de-orituco'],
            ['id' => 452424, 'region_id' => 782659, 'country_code' => 'VE', 'name' => 'Valle de la Pascua', 'active' => 1, 'slug' => 'valle-de-la-pascua'],
            ['id' => 452425, 'region_id' => 782660, 'country_code' => 'VE', 'name' => 'Barquisimeto', 'active' => 1, 'slug' => 'barquisimeto'],
            ['id' => 452426, 'region_id' => 782660, 'country_code' => 'VE', 'name' => 'Cabudare', 'active' => 1, 'slug' => 'cabudare'],
            ['id' => 452427, 'region_id' => 782660, 'country_code' => 'VE', 'name' => 'Carora', 'active' => 1, 'slug' => 'carora'],
            ['id' => 452428, 'region_id' => 782660, 'country_code' => 'VE', 'name' => 'Cubiro', 'active' => 1, 'slug' => 'cubiro'],
            ['id' => 452429, 'region_id' => 782660, 'country_code' => 'VE', 'name' => 'Curarigua', 'active' => 1, 'slug' => 'curarigua'],
            ['id' => 452430, 'region_id' => 782660, 'country_code' => 'VE', 'name' => 'El Cuji', 'active' => 1, 'slug' => 'el-cuji'],
            ['id' => 452431, 'region_id' => 782660, 'country_code' => 'VE', 'name' => 'El Jebe', 'active' => 1, 'slug' => 'el-jebe'],
            ['id' => 452432, 'region_id' => 782660, 'country_code' => 'VE', 'name' => 'Quibor', 'active' => 1, 'slug' => 'quibor'],
            ['id' => 452433, 'region_id' => 782661, 'country_code' => 'VE', 'name' => 'Bailadores', 'active' => 1, 'slug' => 'bailadores'],
            ['id' => 452434, 'region_id' => 782661, 'country_code' => 'VE', 'name' => 'El Vigia', 'active' => 1, 'slug' => 'el-vigia'],
            ['id' => 452435, 'region_id' => 782661, 'country_code' => 'VE', 'name' => 'Merida', 'active' => 1, 'slug' => 'merida'],
            ['id' => 452436, 'region_id' => 782661, 'country_code' => 'VE', 'name' => 'Santa Cruz de Mora', 'active' => 1, 'slug' => 'santa-cruz-de-mora'],
            ['id' => 452437, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Barlovento', 'active' => 1, 'slug' => 'barlovento'],
            ['id' => 452438, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Carrizal', 'active' => 1, 'slug' => 'carrizal'],
            ['id' => 452439, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Cupira', 'active' => 1, 'slug' => 'cupira'],
            ['id' => 452440, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'El Jarillo', 'active' => 1, 'slug' => 'el-jarillo'],
            ['id' => 452441, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Guarenas', 'active' => 1, 'slug' => 'guarenas'],
            ['id' => 452442, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Guatire', 'active' => 1, 'slug' => 'guatire'],
            ['id' => 452443, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Higuerote', 'active' => 1, 'slug' => 'higuerote'],
            ['id' => 452444, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Las Adjuntas', 'active' => 1, 'slug' => 'las-adjuntas'],
            ['id' => 452445, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Los Guayabitos', 'active' => 1, 'slug' => 'los-guayabitos'],
            ['id' => 452446, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Los Teques', 'active' => 1, 'slug' => 'los-teques'],
            ['id' => 452447, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Paracotos', 'active' => 1, 'slug' => 'paracotos'],
            ['id' => 452448, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Rio Chico', 'active' => 1, 'slug' => 'rio-chico'],
            ['id' => 452449, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'San Antonio', 'active' => 1, 'slug' => 'san-antonio'],
            ['id' => 452450, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Solar del Hatillo', 'active' => 1, 'slug' => 'solar-del-hatillo'],
            ['id' => 452451, 'region_id' => 782662, 'country_code' => 'VE', 'name' => 'Valles Del Tuy', 'active' => 1, 'slug' => 'valles-del-tuy'],
            ['id' => 452452, 'region_id' => 782663, 'country_code' => 'VE', 'name' => 'Maturin', 'active' => 1, 'slug' => 'maturin'],
            ['id' => 452453, 'region_id' => 782663, 'country_code' => 'VE', 'name' => 'Punta de Mata', 'active' => 1, 'slug' => 'punta-de-mata'],
            ['id' => 452454, 'region_id' => 782664, 'country_code' => 'VE', 'name' => 'La Asuncion', 'active' => 1, 'slug' => 'la-asuncion'],
            ['id' => 452455, 'region_id' => 782664, 'country_code' => 'VE', 'name' => 'Pampatar', 'active' => 1, 'slug' => 'pampatar'],
            ['id' => 452456, 'region_id' => 782664, 'country_code' => 'VE', 'name' => 'Porlamar', 'active' => 1, 'slug' => 'porlamar'],
            ['id' => 452457, 'region_id' => 782665, 'country_code' => 'VE', 'name' => 'Acarigua', 'active' => 1, 'slug' => 'acarigua'],
            ['id' => 452458, 'region_id' => 782665, 'country_code' => 'VE', 'name' => 'Araure', 'active' => 1, 'slug' => 'araure'],
            ['id' => 452459, 'region_id' => 782665, 'country_code' => 'VE', 'name' => 'Biscucuy', 'active' => 1, 'slug' => 'biscucuy'],
            ['id' => 452460, 'region_id' => 782665, 'country_code' => 'VE', 'name' => 'Guanare', 'active' => 1, 'slug' => 'guanare'],
            ['id' => 452461, 'region_id' => 782666, 'country_code' => 'VE', 'name' => 'Cumana', 'active' => 1, 'slug' => 'cumana'],
            ['id' => 452462, 'region_id' => 782667, 'country_code' => 'VE', 'name' => 'Colon', 'active' => 1, 'slug' => 'colon'],
            ['id' => 452463, 'region_id' => 782667, 'country_code' => 'VE', 'name' => 'La Fria', 'active' => 1, 'slug' => 'la-fria'],
            ['id' => 452464, 'region_id' => 782667, 'country_code' => 'VE', 'name' => 'Rubio', 'active' => 1, 'slug' => 'rubio'],
            ['id' => 452465, 'region_id' => 782667, 'country_code' => 'VE', 'name' => 'San Antonio', 'active' => 1, 'slug' => 'san-antonio'],
            ['id' => 452466, 'region_id' => 782667, 'country_code' => 'VE', 'name' => 'San Cristobal', 'active' => 1, 'slug' => 'san-cristobal'],
            ['id' => 452467, 'region_id' => 782668, 'country_code' => 'VE', 'name' => 'La Puerta', 'active' => 1, 'slug' => 'la-puerta'],
            ['id' => 452468, 'region_id' => 782668, 'country_code' => 'VE', 'name' => 'Trujillo', 'active' => 1, 'slug' => 'trujillo'],
            ['id' => 452469, 'region_id' => 782669, 'country_code' => 'VE', 'name' => 'La Guaira', 'active' => 1, 'slug' => 'la-guaira'],
            ['id' => 452470, 'region_id' => 782670, 'country_code' => 'VE', 'name' => 'San Felipe', 'active' => 1, 'slug' => 'san-felipe'],
            ['id' => 452471, 'region_id' => 782670, 'country_code' => 'VE', 'name' => 'Yaritagua', 'active' => 1, 'slug' => 'yaritagua'],
            ['id' => 452472, 'region_id' => 782671, 'country_code' => 'VE', 'name' => 'Maracaibo', 'active' => 1, 'slug' => 'maracaibo']
    	];
    }
}
