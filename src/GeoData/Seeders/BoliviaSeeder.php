<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class BoliviaSeeder extends Seeder
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
    	return ['code' => 'BO', 'name' => 'Bolivia', 'slug' => 'bolivia'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 858, 'country_code' => 'BO', 'name' => 'Sucre', 'active' => 1, 'slug' => 'sucre'],
            ['id' => 859, 'country_code' => 'BO', 'name' => 'Santa Cruz de la Sierra', 'active' => 1, 'slug' => 'santa-cruz-de-la-sierra'],
            ['id' => 860, 'country_code' => 'BO', 'name' => 'Cochabamba', 'active' => 1, 'slug' => 'cochabamba'],
            ['id' => 861, 'country_code' => 'BO', 'name' => 'La Paz', 'active' => 1, 'slug' => 'la-paz'],
            ['id' => 707066, 'country_code' => 'BO', 'name' => 'Beni', 'active' => 1, 'slug' => 'beni'],
            ['id' => 707067, 'country_code' => 'BO', 'name' => 'Chuquisaca', 'active' => 1, 'slug' => 'chuquisaca'],
            ['id' => 707070, 'country_code' => 'BO', 'name' => 'Oruro', 'active' => 1, 'slug' => 'oruro'],
            ['id' => 707071, 'country_code' => 'BO', 'name' => 'Pando', 'active' => 1, 'slug' => 'pando'],
            ['id' => 707072, 'country_code' => 'BO', 'name' => 'Potosí', 'active' => 1, 'slug' => 'potosi'],
            ['id' => 707074, 'country_code' => 'BO', 'name' => 'Tarija', 'active' => 1, 'slug' => 'tarija']
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
            ['id' => 10955, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Santa Cruz de la Sierra', 'active' => 1, 'slug' => 'santa-cruz-de-la-sierra'],
            ['id' => 10956, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Montero', 'active' => 1, 'slug' => 'montero'],
            ['id' => 10957, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'San Julián', 'active' => 1, 'slug' => 'san-julian'],
            ['id' => 10958, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Mineros', 'active' => 1, 'slug' => 'mineros'],
            ['id' => 10959, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'La Guardia', 'active' => 1, 'slug' => 'la-guardia'],
            ['id' => 10960, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Warnes', 'active' => 1, 'slug' => 'warnes'],
            ['id' => 10961, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'El Torno', 'active' => 1, 'slug' => 'el-torno'],
            ['id' => 10962, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'San Ignacio', 'active' => 1, 'slug' => 'san-ignacio'],
            ['id' => 10963, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Cotoca', 'active' => 1, 'slug' => 'cotoca'],
            ['id' => 10964, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Yapacaní', 'active' => 1, 'slug' => 'yapacani'],
            ['id' => 10965, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Pailón', 'active' => 1, 'slug' => 'pailon'],
            ['id' => 10966, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Camiri', 'active' => 1, 'slug' => 'camiri'],
            ['id' => 10967, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'San Carlos', 'active' => 1, 'slug' => 'san-carlos'],
            ['id' => 10968, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Charagua', 'active' => 1, 'slug' => 'charagua'],
            ['id' => 10969, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Cabezas', 'active' => 1, 'slug' => 'cabezas'],
            ['id' => 10970, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Portachuelo', 'active' => 1, 'slug' => 'portachuelo'],
            ['id' => 10971, 'region_id' => 859, 'country_code' => 'BO', 'name' => 'Puerto Suárez', 'active' => 1, 'slug' => 'puerto-suarez'],
            ['id' => 10882, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Arani', 'active' => 1, 'slug' => 'arani'],
            ['id' => 10883, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Esteban Arce', 'active' => 1, 'slug' => 'esteban-arce'],
            ['id' => 10884, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Arque', 'active' => 1, 'slug' => 'arque'],
            ['id' => 10885, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Ayopaya', 'active' => 1, 'slug' => 'ayopaya'],
            ['id' => 10886, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Campero', 'active' => 1, 'slug' => 'campero'],
            ['id' => 10887, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Capinota', 'active' => 1, 'slug' => 'capinota'],
            ['id' => 10888, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Cercado', 'active' => 1, 'slug' => 'cercado'],
            ['id' => 10889, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Carrasco', 'active' => 1, 'slug' => 'carrasco'],
            ['id' => 10890, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Chapare', 'active' => 1, 'slug' => 'chapare'],
            ['id' => 10891, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Germán Jordán', 'active' => 1, 'slug' => 'german-jordan'],
            ['id' => 10892, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Mizque', 'active' => 1, 'slug' => 'mizque'],
            ['id' => 10893, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Punata', 'active' => 1, 'slug' => 'punata'],
            ['id' => 10894, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Quillacollo', 'active' => 1, 'slug' => 'quillacollo'],
            ['id' => 10895, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Tapacarí', 'active' => 1, 'slug' => 'tapacari'],
            ['id' => 10896, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Bolívar', 'active' => 1, 'slug' => 'bolivar'],
            ['id' => 10897, 'region_id' => 860, 'country_code' => 'BO', 'name' => 'Tiraque', 'active' => 1, 'slug' => 'tiraque'],
            ['id' => 10898, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Aroma', 'active' => 1, 'slug' => 'aroma'],
            ['id' => 10899, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Bautista Saavedra', 'active' => 1, 'slug' => 'bautista-saavedra'],
            ['id' => 10900, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Abel Iturralde', 'active' => 1, 'slug' => 'abel-iturralde'],
            ['id' => 10901, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Caranavi', 'active' => 1, 'slug' => 'caranavi'],
            ['id' => 10902, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Eliodoro Camacho', 'active' => 1, 'slug' => 'eliodoro-camacho'],
            ['id' => 10903, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Franz Tamayo', 'active' => 1, 'slug' => 'franz-tamayo'],
            ['id' => 10904, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Gualberto Villaroel', 'active' => 1, 'slug' => 'gualberto-villaroel'],
            ['id' => 10905, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Ingavi', 'active' => 1, 'slug' => 'ingavi'],
            ['id' => 10906, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Inquisivi', 'active' => 1, 'slug' => 'inquisivi'],
            ['id' => 10907, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'José Manuel Pando', 'active' => 1, 'slug' => 'jose-manuel-pando'],
            ['id' => 10908, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Larecaja', 'active' => 1, 'slug' => 'larecaja'],
            ['id' => 10909, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'José Ramón Loayza', 'active' => 1, 'slug' => 'jose-ramon-loayza'],
            ['id' => 10910, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Los Andes', 'active' => 1, 'slug' => 'los-andes'],
            ['id' => 10911, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Manco Kapac', 'active' => 1, 'slug' => 'manco-kapac'],
            ['id' => 10912, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Muñecas', 'active' => 1, 'slug' => 'munecas'],
            ['id' => 10913, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Nor Yungas', 'active' => 1, 'slug' => 'nor-yungas'],
            ['id' => 10914, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Omasuyos', 'active' => 1, 'slug' => 'omasuyos'],
            ['id' => 10915, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Pacajes', 'active' => 1, 'slug' => 'pacajes'],
            ['id' => 10916, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Pedro Domingo Murillo', 'active' => 1, 'slug' => 'pedro-domingo-murillo'],
            ['id' => 10917, 'region_id' => 861, 'country_code' => 'BO', 'name' => 'Sud Yungas', 'active' => 1, 'slug' => 'sud-yungas'],
            ['id' => 10864, 'region_id' => 707066, 'country_code' => 'BO', 'name' => 'Cercado', 'active' => 1, 'slug' => 'cercado'],
            ['id' => 10865, 'region_id' => 707066, 'country_code' => 'BO', 'name' => 'Antonio Vaca Díez', 'active' => 1, 'slug' => 'antonio-vaca-diez'],
            ['id' => 10866, 'region_id' => 707066, 'country_code' => 'BO', 'name' => 'General José Ballivián Segurola', 'active' => 1, 'slug' => 'general-jose-ballivian-segurola'],
            ['id' => 10867, 'region_id' => 707066, 'country_code' => 'BO', 'name' => 'Yacuma', 'active' => 1, 'slug' => 'yacuma'],
            ['id' => 10868, 'region_id' => 707066, 'country_code' => 'BO', 'name' => 'Moxos', 'active' => 1, 'slug' => 'moxos'],
            ['id' => 10869, 'region_id' => 707066, 'country_code' => 'BO', 'name' => 'Marbán', 'active' => 1, 'slug' => 'marban'],
            ['id' => 10870, 'region_id' => 707066, 'country_code' => 'BO', 'name' => 'Mamoré', 'active' => 1, 'slug' => 'mamore'],
            ['id' => 10871, 'region_id' => 707066, 'country_code' => 'BO', 'name' => 'Iténez', 'active' => 1, 'slug' => 'itenez'],
            ['id' => 10872, 'region_id' => 707067, 'country_code' => 'BO', 'name' => 'Oropeza', 'active' => 1, 'slug' => 'oropeza'],
            ['id' => 10873, 'region_id' => 707067, 'country_code' => 'BO', 'name' => 'Azurduy', 'active' => 1, 'slug' => 'azurduy'],
            ['id' => 10874, 'region_id' => 707067, 'country_code' => 'BO', 'name' => 'Zudañez', 'active' => 1, 'slug' => 'zudanez'],
            ['id' => 10875, 'region_id' => 707067, 'country_code' => 'BO', 'name' => 'Tomina', 'active' => 1, 'slug' => 'tomina'],
            ['id' => 10876, 'region_id' => 707067, 'country_code' => 'BO', 'name' => 'Hernando Siles', 'active' => 1, 'slug' => 'hernando-siles'],
            ['id' => 10877, 'region_id' => 707067, 'country_code' => 'BO', 'name' => 'Yamparaez', 'active' => 1, 'slug' => 'yamparaez'],
            ['id' => 10878, 'region_id' => 707067, 'country_code' => 'BO', 'name' => 'Nor Cinti', 'active' => 1, 'slug' => 'nor-cinti'],
            ['id' => 10879, 'region_id' => 707067, 'country_code' => 'BO', 'name' => 'Sur Cinti', 'active' => 1, 'slug' => 'sur-cinti'],
            ['id' => 10880, 'region_id' => 707067, 'country_code' => 'BO', 'name' => 'Belisario Boeto', 'active' => 1, 'slug' => 'belisario-boeto'],
            ['id' => 10881, 'region_id' => 707067, 'country_code' => 'BO', 'name' => 'Luis Calvo', 'active' => 1, 'slug' => 'luis-calvo'],
            ['id' => 10918, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Atahuallpa', 'active' => 1, 'slug' => 'atahuallpa'],
            ['id' => 10919, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Carangas', 'active' => 1, 'slug' => 'carangas'],
            ['id' => 10920, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Cercado', 'active' => 1, 'slug' => 'cercado'],
            ['id' => 10921, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Eduardo Avaroa', 'active' => 1, 'slug' => 'eduardo-avaroa'],
            ['id' => 10922, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Ladislao Cabrera', 'active' => 1, 'slug' => 'ladislao-cabrera'],
            ['id' => 10923, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Litoral', 'active' => 1, 'slug' => 'litoral'],
            ['id' => 10924, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Puerto de Mejillones', 'active' => 1, 'slug' => 'puerto-de-mejillones'],
            ['id' => 10925, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Nor Carangas', 'active' => 1, 'slug' => 'nor-carangas'],
            ['id' => 10926, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Pantaleón Dalence', 'active' => 1, 'slug' => 'pantaleon-dalence'],
            ['id' => 10927, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Poopó', 'active' => 1, 'slug' => 'poopo'],
            ['id' => 10928, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Sajama', 'active' => 1, 'slug' => 'sajama'],
            ['id' => 10929, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'San Pedro de Totora', 'active' => 1, 'slug' => 'san-pedro-de-totora'],
            ['id' => 10930, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Saucarí', 'active' => 1, 'slug' => 'saucari'],
            ['id' => 10931, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Sebastian Pagador', 'active' => 1, 'slug' => 'sebastian-pagador'],
            ['id' => 10932, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Sud Carangas', 'active' => 1, 'slug' => 'sud-carangas'],
            ['id' => 10933, 'region_id' => 707070, 'country_code' => 'BO', 'name' => 'Tomas Barrón', 'active' => 1, 'slug' => 'tomas-barron'],
            ['id' => 10934, 'region_id' => 707071, 'country_code' => 'BO', 'name' => 'Abuná', 'active' => 1, 'slug' => 'abuna'],
            ['id' => 10935, 'region_id' => 707071, 'country_code' => 'BO', 'name' => 'Federico Román', 'active' => 1, 'slug' => 'federico-roman'],
            ['id' => 10936, 'region_id' => 707071, 'country_code' => 'BO', 'name' => 'Madre de Dios', 'active' => 1, 'slug' => 'madre-de-dios'],
            ['id' => 10937, 'region_id' => 707071, 'country_code' => 'BO', 'name' => 'Manuripi', 'active' => 1, 'slug' => 'manuripi'],
            ['id' => 10938, 'region_id' => 707071, 'country_code' => 'BO', 'name' => 'Nicolás Suárez', 'active' => 1, 'slug' => 'nicolas-suarez'],
            ['id' => 10939, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Alonzo de Ibáñez', 'active' => 1, 'slug' => 'alonzo-de-ibanez'],
            ['id' => 10940, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Antonio Quijarro', 'active' => 1, 'slug' => 'antonio-quijarro'],
            ['id' => 10941, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Bernardino Bilbao', 'active' => 1, 'slug' => 'bernardino-bilbao'],
            ['id' => 10942, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Charcas', 'active' => 1, 'slug' => 'charcas'],
            ['id' => 10943, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Chayanta', 'active' => 1, 'slug' => 'chayanta'],
            ['id' => 10944, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Cornelio Saavedra', 'active' => 1, 'slug' => 'cornelio-saavedra'],
            ['id' => 10945, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Daniel Campos', 'active' => 1, 'slug' => 'daniel-campos'],
            ['id' => 10946, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Enrique Baldivieso', 'active' => 1, 'slug' => 'enrique-baldivieso'],
            ['id' => 10947, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'José María Linares', 'active' => 1, 'slug' => 'jose-maria-linares'],
            ['id' => 10948, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Modesto Omiste', 'active' => 1, 'slug' => 'modesto-omiste'],
            ['id' => 10949, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Nor Chichas', 'active' => 1, 'slug' => 'nor-chichas'],
            ['id' => 10950, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Nor Lípez', 'active' => 1, 'slug' => 'nor-lipez'],
            ['id' => 10951, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Rafael Bustillo', 'active' => 1, 'slug' => 'rafael-bustillo'],
            ['id' => 10952, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Sud Chichas', 'active' => 1, 'slug' => 'sud-chichas'],
            ['id' => 10953, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Sud Lipez', 'active' => 1, 'slug' => 'sud-lipez'],
            ['id' => 10954, 'region_id' => 707072, 'country_code' => 'BO', 'name' => 'Tomás Frías', 'active' => 1, 'slug' => 'tomas-frias'],
            ['id' => 10972, 'region_id' => 707074, 'country_code' => 'BO', 'name' => 'Aniceto Arce', 'active' => 1, 'slug' => 'aniceto-arce'],
            ['id' => 10973, 'region_id' => 707074, 'country_code' => 'BO', 'name' => 'Burdet O\'Connor', 'active' => 1, 'slug' => 'burdet-oconnor'],
            ['id' => 10974, 'region_id' => 707074, 'country_code' => 'BO', 'name' => 'Cercado', 'active' => 1, 'slug' => 'cercado'],
            ['id' => 10975, 'region_id' => 707074, 'country_code' => 'BO', 'name' => 'Eustaquio Méndez', 'active' => 1, 'slug' => 'eustaquio-mendez'],
            ['id' => 10976, 'region_id' => 707074, 'country_code' => 'BO', 'name' => 'Gran Chaco', 'active' => 1, 'slug' => 'gran-chaco'],
            ['id' => 10977, 'region_id' => 707074, 'country_code' => 'BO', 'name' => 'José María Avilés', 'active' => 1, 'slug' => 'jose-maria-aviles']
    	];
    }
}
