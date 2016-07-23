<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class PeruSeeder extends Seeder
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
    	return ['code' => 'PE', 'name' => 'Peru', 'slug' => 'peru'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 782246, 'country_code' => 'PE', 'name' => 'Amazonas', 'active' => 1, 'slug' => 'amazonas'],
            ['id' => 782247, 'country_code' => 'PE', 'name' => 'Ancash', 'active' => 1, 'slug' => 'ancash'],
            ['id' => 782248, 'country_code' => 'PE', 'name' => 'Apurimac', 'active' => 1, 'slug' => 'apurimac'],
            ['id' => 782249, 'country_code' => 'PE', 'name' => 'Arequipa', 'active' => 1, 'slug' => 'arequipa'],
            ['id' => 782250, 'country_code' => 'PE', 'name' => 'Ayacucho', 'active' => 1, 'slug' => 'ayacucho'],
            ['id' => 782251, 'country_code' => 'PE', 'name' => 'Cajamarca', 'active' => 1, 'slug' => 'cajamarca'],
            ['id' => 782252, 'country_code' => 'PE', 'name' => 'Callao', 'active' => 1, 'slug' => 'callao'],
            ['id' => 782253, 'country_code' => 'PE', 'name' => 'Cusco', 'active' => 1, 'slug' => 'cusco'],
            ['id' => 782254, 'country_code' => 'PE', 'name' => 'Huancavelica', 'active' => 1, 'slug' => 'huancavelica'],
            ['id' => 782255, 'country_code' => 'PE', 'name' => 'Huanuco', 'active' => 1, 'slug' => 'huanuco'],
            ['id' => 782256, 'country_code' => 'PE', 'name' => 'Ica', 'active' => 1, 'slug' => 'ica'],
            ['id' => 782257, 'country_code' => 'PE', 'name' => 'Junín', 'active' => 1, 'slug' => 'junin'],
            ['id' => 782258, 'country_code' => 'PE', 'name' => 'La Libertad', 'active' => 1, 'slug' => 'la-libertad'],
            ['id' => 782259, 'country_code' => 'PE', 'name' => 'Lambayeque', 'active' => 1, 'slug' => 'lambayeque'],
            ['id' => 782260, 'country_code' => 'PE', 'name' => 'Lima', 'active' => 1, 'slug' => 'lima'],
            ['id' => 782261, 'country_code' => 'PE', 'name' => 'Loreto', 'active' => 1, 'slug' => 'loreto'],
            ['id' => 782262, 'country_code' => 'PE', 'name' => 'Madre de Dios', 'active' => 1, 'slug' => 'madre-de-dios'],
            ['id' => 782263, 'country_code' => 'PE', 'name' => 'Moquegua', 'active' => 1, 'slug' => 'moquegua'],
            ['id' => 782264, 'country_code' => 'PE', 'name' => 'Pasco', 'active' => 1, 'slug' => 'pasco'],
            ['id' => 782265, 'country_code' => 'PE', 'name' => 'Piura', 'active' => 1, 'slug' => 'piura'],
            ['id' => 782266, 'country_code' => 'PE', 'name' => 'Puno', 'active' => 1, 'slug' => 'puno'],
            ['id' => 782267, 'country_code' => 'PE', 'name' => 'San Martín', 'active' => 1, 'slug' => 'san-martin'],
            ['id' => 782268, 'country_code' => 'PE', 'name' => 'Tacna', 'active' => 1, 'slug' => 'tacna'],
            ['id' => 782269, 'country_code' => 'PE', 'name' => 'Tumbes', 'active' => 1, 'slug' => 'tumbes'],
            ['id' => 782270, 'country_code' => 'PE', 'name' => 'Ucayali', 'active' => 1, 'slug' => 'ucayali']
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
            ['id' => 355159, 'region_id' => 782246, 'country_code' => 'PE', 'name' => 'Bagua', 'active' => 1, 'slug' => 'bagua'],
            ['id' => 355160, 'region_id' => 782246, 'country_code' => 'PE', 'name' => 'Bongara', 'active' => 1, 'slug' => 'bongara'],
            ['id' => 355161, 'region_id' => 782246, 'country_code' => 'PE', 'name' => 'Condorcanqui', 'active' => 1, 'slug' => 'condorcanqui'],
            ['id' => 355162, 'region_id' => 782246, 'country_code' => 'PE', 'name' => 'Luya', 'active' => 1, 'slug' => 'luya'],
            ['id' => 355163, 'region_id' => 782246, 'country_code' => 'PE', 'name' => 'Rodriguez de Mendoza', 'active' => 1, 'slug' => 'rodriguez-de-mendoza'],
            ['id' => 355164, 'region_id' => 782246, 'country_code' => 'PE', 'name' => 'Utcubamba', 'active' => 1, 'slug' => 'utcubamba'],
            ['id' => 355165, 'region_id' => 782246, 'country_code' => 'PE', 'name' => 'Chachapoyas', 'active' => 1, 'slug' => 'chachapoyas'],
            ['id' => 355166, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Aija', 'active' => 1, 'slug' => 'aija'],
            ['id' => 355167, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Antonio Raymondi', 'active' => 1, 'slug' => 'antonio-raymondi'],
            ['id' => 355168, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Asunción', 'active' => 1, 'slug' => 'asuncion'],
            ['id' => 355169, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Bolognesi', 'active' => 1, 'slug' => 'bolognesi'],
            ['id' => 355170, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Carlos F. Fitzcarrald', 'active' => 1, 'slug' => 'carlos-f-fitzcarrald'],
            ['id' => 355171, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Casma', 'active' => 1, 'slug' => 'casma'],
            ['id' => 355172, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Corongo', 'active' => 1, 'slug' => 'corongo'],
            ['id' => 355173, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Huari', 'active' => 1, 'slug' => 'huari'],
            ['id' => 355174, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Huaylas', 'active' => 1, 'slug' => 'huaylas'],
            ['id' => 355175, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Mariscal Luzuriaga', 'active' => 1, 'slug' => 'mariscal-luzuriaga'],
            ['id' => 355176, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Ocros', 'active' => 1, 'slug' => 'ocros'],
            ['id' => 355177, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Pallasca', 'active' => 1, 'slug' => 'pallasca'],
            ['id' => 355178, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Pomabamba', 'active' => 1, 'slug' => 'pomabamba'],
            ['id' => 355179, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Recuay', 'active' => 1, 'slug' => 'recuay'],
            ['id' => 355180, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Santa', 'active' => 1, 'slug' => 'santa'],
            ['id' => 355181, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Sihuas', 'active' => 1, 'slug' => 'sihuas'],
            ['id' => 355182, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Yungay', 'active' => 1, 'slug' => 'yungay'],
            ['id' => 355183, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Carhuaz', 'active' => 1, 'slug' => 'carhuaz'],
            ['id' => 355184, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Huarmey', 'active' => 1, 'slug' => 'huarmey'],
            ['id' => 355185, 'region_id' => 782247, 'country_code' => 'PE', 'name' => 'Huaraz', 'active' => 1, 'slug' => 'huaraz'],
            ['id' => 355186, 'region_id' => 782248, 'country_code' => 'PE', 'name' => 'Antabamba', 'active' => 1, 'slug' => 'antabamba'],
            ['id' => 355187, 'region_id' => 782248, 'country_code' => 'PE', 'name' => 'Aymaraes', 'active' => 1, 'slug' => 'aymaraes'],
            ['id' => 355188, 'region_id' => 782248, 'country_code' => 'PE', 'name' => 'Chincheros', 'active' => 1, 'slug' => 'chincheros'],
            ['id' => 355189, 'region_id' => 782248, 'country_code' => 'PE', 'name' => 'Cotabambas', 'active' => 1, 'slug' => 'cotabambas'],
            ['id' => 355190, 'region_id' => 782248, 'country_code' => 'PE', 'name' => 'Grau', 'active' => 1, 'slug' => 'grau'],
            ['id' => 355191, 'region_id' => 782248, 'country_code' => 'PE', 'name' => 'Andahuaylas', 'active' => 1, 'slug' => 'andahuaylas'],
            ['id' => 355192, 'region_id' => 782248, 'country_code' => 'PE', 'name' => 'Abancay', 'active' => 1, 'slug' => 'abancay'],
            ['id' => 355193, 'region_id' => 782249, 'country_code' => 'PE', 'name' => 'Arequipa', 'active' => 1, 'slug' => 'arequipa'],
            ['id' => 355194, 'region_id' => 782249, 'country_code' => 'PE', 'name' => 'Caraveli', 'active' => 1, 'slug' => 'caraveli'],
            ['id' => 355195, 'region_id' => 782249, 'country_code' => 'PE', 'name' => 'Castilla', 'active' => 1, 'slug' => 'castilla'],
            ['id' => 355196, 'region_id' => 782249, 'country_code' => 'PE', 'name' => 'Caylloma', 'active' => 1, 'slug' => 'caylloma'],
            ['id' => 355197, 'region_id' => 782249, 'country_code' => 'PE', 'name' => 'Condesuyos', 'active' => 1, 'slug' => 'condesuyos'],
            ['id' => 355198, 'region_id' => 782249, 'country_code' => 'PE', 'name' => 'Islay', 'active' => 1, 'slug' => 'islay'],
            ['id' => 355199, 'region_id' => 782249, 'country_code' => 'PE', 'name' => 'La Unión', 'active' => 1, 'slug' => 'la-union'],
            ['id' => 355200, 'region_id' => 782249, 'country_code' => 'PE', 'name' => 'Camaná', 'active' => 1, 'slug' => 'camana'],
            ['id' => 355201, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'Cangallo', 'active' => 1, 'slug' => 'cangallo'],
            ['id' => 355202, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'Huamanga', 'active' => 1, 'slug' => 'huamanga'],
            ['id' => 355203, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'Huanca Sancos', 'active' => 1, 'slug' => 'huanca-sancos'],
            ['id' => 355204, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'La Mar', 'active' => 1, 'slug' => 'la-mar'],
            ['id' => 355205, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'Lucanas', 'active' => 1, 'slug' => 'lucanas'],
            ['id' => 355206, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'Parinacochas', 'active' => 1, 'slug' => 'parinacochas'],
            ['id' => 355207, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'Paucar del Sara Sara', 'active' => 1, 'slug' => 'paucar-del-sara-sara'],
            ['id' => 355208, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'Sucre', 'active' => 1, 'slug' => 'sucre'],
            ['id' => 355209, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'Victor Fajardo', 'active' => 1, 'slug' => 'victor-fajardo'],
            ['id' => 355210, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'Vilcas Huaman', 'active' => 1, 'slug' => 'vilcas-huaman'],
            ['id' => 355211, 'region_id' => 782250, 'country_code' => 'PE', 'name' => 'Huanta', 'active' => 1, 'slug' => 'huanta'],
            ['id' => 355212, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'Cajamarca', 'active' => 1, 'slug' => 'cajamarca'],
            ['id' => 355213, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'Chota', 'active' => 1, 'slug' => 'chota'],
            ['id' => 355214, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'Contumaza', 'active' => 1, 'slug' => 'contumaza'],
            ['id' => 355215, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'Cutervo', 'active' => 1, 'slug' => 'cutervo'],
            ['id' => 355216, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'Hualgayoc', 'active' => 1, 'slug' => 'hualgayoc'],
            ['id' => 355217, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'San Ignacio', 'active' => 1, 'slug' => 'san-ignacio'],
            ['id' => 355218, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'San Marcos', 'active' => 1, 'slug' => 'san-marcos'],
            ['id' => 355219, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'San Miguel', 'active' => 1, 'slug' => 'san-miguel'],
            ['id' => 355220, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'San Pablo', 'active' => 1, 'slug' => 'san-pablo'],
            ['id' => 355221, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'Santa Cruz', 'active' => 1, 'slug' => 'santa-cruz'],
            ['id' => 355222, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'Cajabamba', 'active' => 1, 'slug' => 'cajabamba'],
            ['id' => 355223, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'Celendin', 'active' => 1, 'slug' => 'celendin'],
            ['id' => 355224, 'region_id' => 782251, 'country_code' => 'PE', 'name' => 'Jaen', 'active' => 1, 'slug' => 'jaen'],
            ['id' => 355225, 'region_id' => 782252, 'country_code' => 'PE', 'name' => 'Callao', 'active' => 1, 'slug' => 'callao'],
            ['id' => 355226, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Acomayo', 'active' => 1, 'slug' => 'acomayo'],
            ['id' => 355227, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Anta', 'active' => 1, 'slug' => 'anta'],
            ['id' => 355228, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Calca', 'active' => 1, 'slug' => 'calca'],
            ['id' => 355229, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Canas', 'active' => 1, 'slug' => 'canas'],
            ['id' => 355230, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Canchis', 'active' => 1, 'slug' => 'canchis'],
            ['id' => 355231, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Chumbivilcas', 'active' => 1, 'slug' => 'chumbivilcas'],
            ['id' => 355232, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Espinar', 'active' => 1, 'slug' => 'espinar'],
            ['id' => 355233, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'La Convención', 'active' => 1, 'slug' => 'la-convencion'],
            ['id' => 355234, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Paruro', 'active' => 1, 'slug' => 'paruro'],
            ['id' => 355235, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Paucartambo', 'active' => 1, 'slug' => 'paucartambo'],
            ['id' => 355236, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Quispicanchi', 'active' => 1, 'slug' => 'quispicanchi'],
            ['id' => 355237, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Urubamba', 'active' => 1, 'slug' => 'urubamba'],
            ['id' => 355238, 'region_id' => 782253, 'country_code' => 'PE', 'name' => 'Cusco', 'active' => 1, 'slug' => 'cusco'],
            ['id' => 355239, 'region_id' => 782254, 'country_code' => 'PE', 'name' => 'Acobamba', 'active' => 1, 'slug' => 'acobamba'],
            ['id' => 355240, 'region_id' => 782254, 'country_code' => 'PE', 'name' => 'Angaraes', 'active' => 1, 'slug' => 'angaraes'],
            ['id' => 355241, 'region_id' => 782254, 'country_code' => 'PE', 'name' => 'Castrovirreyna', 'active' => 1, 'slug' => 'castrovirreyna'],
            ['id' => 355242, 'region_id' => 782254, 'country_code' => 'PE', 'name' => 'Churcampa', 'active' => 1, 'slug' => 'churcampa'],
            ['id' => 355243, 'region_id' => 782254, 'country_code' => 'PE', 'name' => 'Huancavelica', 'active' => 1, 'slug' => 'huancavelica'],
            ['id' => 355244, 'region_id' => 782254, 'country_code' => 'PE', 'name' => 'Huaytara', 'active' => 1, 'slug' => 'huaytara'],
            ['id' => 355245, 'region_id' => 782254, 'country_code' => 'PE', 'name' => 'Tayacaja', 'active' => 1, 'slug' => 'tayacaja'],
            ['id' => 355246, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Dos de Mayo', 'active' => 1, 'slug' => 'dos-de-mayo'],
            ['id' => 355247, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Huacaybamba', 'active' => 1, 'slug' => 'huacaybamba'],
            ['id' => 355248, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Huamalies', 'active' => 1, 'slug' => 'huamalies'],
            ['id' => 355249, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Huanuco', 'active' => 1, 'slug' => 'huanuco'],
            ['id' => 355250, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Lauricocha', 'active' => 1, 'slug' => 'lauricocha'],
            ['id' => 355251, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Leoncio Prado', 'active' => 1, 'slug' => 'leoncio-prado'],
            ['id' => 355252, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Marañon', 'active' => 1, 'slug' => 'maranon'],
            ['id' => 355253, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Pachitea', 'active' => 1, 'slug' => 'pachitea'],
            ['id' => 355254, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Puerto Inca', 'active' => 1, 'slug' => 'puerto-inca'],
            ['id' => 355255, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Yarowilca', 'active' => 1, 'slug' => 'yarowilca'],
            ['id' => 355256, 'region_id' => 782255, 'country_code' => 'PE', 'name' => 'Ambo', 'active' => 1, 'slug' => 'ambo'],
            ['id' => 355257, 'region_id' => 782256, 'country_code' => 'PE', 'name' => 'Chincha', 'active' => 1, 'slug' => 'chincha'],
            ['id' => 355258, 'region_id' => 782256, 'country_code' => 'PE', 'name' => 'Nazca', 'active' => 1, 'slug' => 'nazca'],
            ['id' => 355259, 'region_id' => 782256, 'country_code' => 'PE', 'name' => 'Palpa', 'active' => 1, 'slug' => 'palpa'],
            ['id' => 355260, 'region_id' => 782256, 'country_code' => 'PE', 'name' => 'Pisco', 'active' => 1, 'slug' => 'pisco'],
            ['id' => 355261, 'region_id' => 782256, 'country_code' => 'PE', 'name' => 'Ica', 'active' => 1, 'slug' => 'ica'],
            ['id' => 355262, 'region_id' => 782257, 'country_code' => 'PE', 'name' => 'Chanchamayo', 'active' => 1, 'slug' => 'chanchamayo'],
            ['id' => 355263, 'region_id' => 782257, 'country_code' => 'PE', 'name' => 'Chupaca', 'active' => 1, 'slug' => 'chupaca'],
            ['id' => 355264, 'region_id' => 782257, 'country_code' => 'PE', 'name' => 'Concepción', 'active' => 1, 'slug' => 'concepcion'],
            ['id' => 355265, 'region_id' => 782257, 'country_code' => 'PE', 'name' => 'Huancayo', 'active' => 1, 'slug' => 'huancayo'],
            ['id' => 355266, 'region_id' => 782257, 'country_code' => 'PE', 'name' => 'Junín', 'active' => 1, 'slug' => 'junin'],
            ['id' => 355267, 'region_id' => 782257, 'country_code' => 'PE', 'name' => 'Tarma', 'active' => 1, 'slug' => 'tarma'],
            ['id' => 355268, 'region_id' => 782257, 'country_code' => 'PE', 'name' => 'Yauli', 'active' => 1, 'slug' => 'yauli'],
            ['id' => 355269, 'region_id' => 782257, 'country_code' => 'PE', 'name' => 'Satipo', 'active' => 1, 'slug' => 'satipo'],
            ['id' => 355270, 'region_id' => 782257, 'country_code' => 'PE', 'name' => 'Jauja', 'active' => 1, 'slug' => 'jauja'],
            ['id' => 355271, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Bolivar', 'active' => 1, 'slug' => 'bolivar'],
            ['id' => 355272, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Gran Chimu', 'active' => 1, 'slug' => 'gran-chimu'],
            ['id' => 355273, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Julcan', 'active' => 1, 'slug' => 'julcan'],
            ['id' => 355274, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Otuzco', 'active' => 1, 'slug' => 'otuzco'],
            ['id' => 355275, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Pacasmayo', 'active' => 1, 'slug' => 'pacasmayo'],
            ['id' => 355276, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Pataz', 'active' => 1, 'slug' => 'pataz'],
            ['id' => 355277, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Sanchez Carrion', 'active' => 1, 'slug' => 'sanchez-carrion'],
            ['id' => 355278, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Trujillo', 'active' => 1, 'slug' => 'trujillo'],
            ['id' => 355279, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Viru', 'active' => 1, 'slug' => 'viru'],
            ['id' => 355280, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Santiago de Chuco', 'active' => 1, 'slug' => 'santiago-de-chuco'],
            ['id' => 355281, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Ascope', 'active' => 1, 'slug' => 'ascope'],
            ['id' => 355282, 'region_id' => 782258, 'country_code' => 'PE', 'name' => 'Chepen', 'active' => 1, 'slug' => 'chepen'],
            ['id' => 355283, 'region_id' => 782259, 'country_code' => 'PE', 'name' => 'Chiclayo', 'active' => 1, 'slug' => 'chiclayo'],
            ['id' => 355284, 'region_id' => 782259, 'country_code' => 'PE', 'name' => 'Ferreñafe', 'active' => 1, 'slug' => 'ferrenafe'],
            ['id' => 355285, 'region_id' => 782259, 'country_code' => 'PE', 'name' => 'Lambayeque', 'active' => 1, 'slug' => 'lambayeque'],
            ['id' => 355286, 'region_id' => 782260, 'country_code' => 'PE', 'name' => 'Barranca', 'active' => 1, 'slug' => 'barranca'],
            ['id' => 355287, 'region_id' => 782260, 'country_code' => 'PE', 'name' => 'Cajatambo', 'active' => 1, 'slug' => 'cajatambo'],
            ['id' => 355288, 'region_id' => 782260, 'country_code' => 'PE', 'name' => 'Canta', 'active' => 1, 'slug' => 'canta'],
            ['id' => 355289, 'region_id' => 782260, 'country_code' => 'PE', 'name' => 'Huarochirí', 'active' => 1, 'slug' => 'huarochiri'],
            ['id' => 355290, 'region_id' => 782260, 'country_code' => 'PE', 'name' => 'Lima', 'active' => 1, 'slug' => 'lima'],
            ['id' => 355291, 'region_id' => 782260, 'country_code' => 'PE', 'name' => 'Oyón', 'active' => 1, 'slug' => 'oyon'],
            ['id' => 355292, 'region_id' => 782260, 'country_code' => 'PE', 'name' => 'Yauyos', 'active' => 1, 'slug' => 'yauyos'],
            ['id' => 355293, 'region_id' => 782260, 'country_code' => 'PE', 'name' => 'Huaura', 'active' => 1, 'slug' => 'huaura'],
            ['id' => 355294, 'region_id' => 782260, 'country_code' => 'PE', 'name' => 'San Vicente de Cañete', 'active' => 1, 'slug' => 'san-vicente-de-canete'],
            ['id' => 355295, 'region_id' => 782260, 'country_code' => 'PE', 'name' => 'Huaral', 'active' => 1, 'slug' => 'huaral'],
            ['id' => 355296, 'region_id' => 782261, 'country_code' => 'PE', 'name' => 'Alto Amazonas', 'active' => 1, 'slug' => 'alto-amazonas'],
            ['id' => 355297, 'region_id' => 782261, 'country_code' => 'PE', 'name' => 'Loreto', 'active' => 1, 'slug' => 'loreto'],
            ['id' => 355298, 'region_id' => 782261, 'country_code' => 'PE', 'name' => 'Mariscal Ramon Castilla', 'active' => 1, 'slug' => 'mariscal-ramon-castilla'],
            ['id' => 355299, 'region_id' => 782261, 'country_code' => 'PE', 'name' => 'Maynas', 'active' => 1, 'slug' => 'maynas'],
            ['id' => 355300, 'region_id' => 782261, 'country_code' => 'PE', 'name' => 'Requena', 'active' => 1, 'slug' => 'requena'],
            ['id' => 355301, 'region_id' => 782261, 'country_code' => 'PE', 'name' => 'Ucayali', 'active' => 1, 'slug' => 'ucayali'],
            ['id' => 355302, 'region_id' => 782262, 'country_code' => 'PE', 'name' => 'Manu', 'active' => 1, 'slug' => 'manu'],
            ['id' => 355303, 'region_id' => 782262, 'country_code' => 'PE', 'name' => 'Tahuamanu', 'active' => 1, 'slug' => 'tahuamanu'],
            ['id' => 355304, 'region_id' => 782262, 'country_code' => 'PE', 'name' => 'Tambopata', 'active' => 1, 'slug' => 'tambopata'],
            ['id' => 355305, 'region_id' => 782263, 'country_code' => 'PE', 'name' => 'General Sanchez Cerro', 'active' => 1, 'slug' => 'general-sanchez-cerro'],
            ['id' => 355306, 'region_id' => 782263, 'country_code' => 'PE', 'name' => 'Mariscal Nieto', 'active' => 1, 'slug' => 'mariscal-nieto'],
            ['id' => 355307, 'region_id' => 782263, 'country_code' => 'PE', 'name' => 'Ilo', 'active' => 1, 'slug' => 'ilo'],
            ['id' => 355308, 'region_id' => 782264, 'country_code' => 'PE', 'name' => 'Daniel Alcides Carrion', 'active' => 1, 'slug' => 'daniel-alcides-carrion'],
            ['id' => 355309, 'region_id' => 782264, 'country_code' => 'PE', 'name' => 'Oxapampa', 'active' => 1, 'slug' => 'oxapampa'],
            ['id' => 355310, 'region_id' => 782264, 'country_code' => 'PE', 'name' => 'Pasco', 'active' => 1, 'slug' => 'pasco'],
            ['id' => 355311, 'region_id' => 782265, 'country_code' => 'PE', 'name' => 'Huancabamba', 'active' => 1, 'slug' => 'huancabamba'],
            ['id' => 355312, 'region_id' => 782265, 'country_code' => 'PE', 'name' => 'Morropon', 'active' => 1, 'slug' => 'morropon'],
            ['id' => 355313, 'region_id' => 782265, 'country_code' => 'PE', 'name' => 'Piura', 'active' => 1, 'slug' => 'piura'],
            ['id' => 355314, 'region_id' => 782265, 'country_code' => 'PE', 'name' => 'Sullana', 'active' => 1, 'slug' => 'sullana'],
            ['id' => 355315, 'region_id' => 782265, 'country_code' => 'PE', 'name' => 'Ayabaca', 'active' => 1, 'slug' => 'ayabaca'],
            ['id' => 355316, 'region_id' => 782265, 'country_code' => 'PE', 'name' => 'Sechura', 'active' => 1, 'slug' => 'sechura'],
            ['id' => 355317, 'region_id' => 782265, 'country_code' => 'PE', 'name' => 'Paita', 'active' => 1, 'slug' => 'paita'],
            ['id' => 355318, 'region_id' => 782265, 'country_code' => 'PE', 'name' => 'Talara', 'active' => 1, 'slug' => 'talara'],
            ['id' => 355319, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'Azangaro', 'active' => 1, 'slug' => 'azangaro'],
            ['id' => 355320, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'Carabaya', 'active' => 1, 'slug' => 'carabaya'],
            ['id' => 355321, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'Chucuito', 'active' => 1, 'slug' => 'chucuito'],
            ['id' => 355322, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'El Collao', 'active' => 1, 'slug' => 'el-collao'],
            ['id' => 355323, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'Huancane', 'active' => 1, 'slug' => 'huancane'],
            ['id' => 355324, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'Lampa', 'active' => 1, 'slug' => 'lampa'],
            ['id' => 355325, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'Melgar', 'active' => 1, 'slug' => 'melgar'],
            ['id' => 355326, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'Moho', 'active' => 1, 'slug' => 'moho'],
            ['id' => 355327, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'Puno', 'active' => 1, 'slug' => 'puno'],
            ['id' => 355328, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'San Antonio de Putina', 'active' => 1, 'slug' => 'san-antonio-de-putina'],
            ['id' => 355329, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'San Roman', 'active' => 1, 'slug' => 'san-roman'],
            ['id' => 355330, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'Sandia', 'active' => 1, 'slug' => 'sandia'],
            ['id' => 355331, 'region_id' => 782266, 'country_code' => 'PE', 'name' => 'Yunguyo', 'active' => 1, 'slug' => 'yunguyo'],
            ['id' => 355332, 'region_id' => 782267, 'country_code' => 'PE', 'name' => 'Bellavista', 'active' => 1, 'slug' => 'bellavista'],
            ['id' => 355333, 'region_id' => 782267, 'country_code' => 'PE', 'name' => 'El Dorado', 'active' => 1, 'slug' => 'el-dorado'],
            ['id' => 355334, 'region_id' => 782267, 'country_code' => 'PE', 'name' => 'Huallaga', 'active' => 1, 'slug' => 'huallaga'],
            ['id' => 355335, 'region_id' => 782267, 'country_code' => 'PE', 'name' => 'Mariscal Caceres', 'active' => 1, 'slug' => 'mariscal-caceres'],
            ['id' => 355336, 'region_id' => 782267, 'country_code' => 'PE', 'name' => 'Moyobamba', 'active' => 1, 'slug' => 'moyobamba'],
            ['id' => 355337, 'region_id' => 782267, 'country_code' => 'PE', 'name' => 'Rioja', 'active' => 1, 'slug' => 'rioja'],
            ['id' => 355338, 'region_id' => 782267, 'country_code' => 'PE', 'name' => 'San Martin', 'active' => 1, 'slug' => 'san-martin'],
            ['id' => 355339, 'region_id' => 782267, 'country_code' => 'PE', 'name' => 'Picota', 'active' => 1, 'slug' => 'picota'],
            ['id' => 355340, 'region_id' => 782267, 'country_code' => 'PE', 'name' => 'Lamas', 'active' => 1, 'slug' => 'lamas'],
            ['id' => 355341, 'region_id' => 782267, 'country_code' => 'PE', 'name' => 'Tocache', 'active' => 1, 'slug' => 'tocache'],
            ['id' => 355342, 'region_id' => 782268, 'country_code' => 'PE', 'name' => 'Jorge Basadre', 'active' => 1, 'slug' => 'jorge-basadre'],
            ['id' => 355343, 'region_id' => 782268, 'country_code' => 'PE', 'name' => 'Tacna', 'active' => 1, 'slug' => 'tacna'],
            ['id' => 355344, 'region_id' => 782268, 'country_code' => 'PE', 'name' => 'Tarata', 'active' => 1, 'slug' => 'tarata'],
            ['id' => 355345, 'region_id' => 782268, 'country_code' => 'PE', 'name' => 'Candarave', 'active' => 1, 'slug' => 'candarave'],
            ['id' => 355346, 'region_id' => 782269, 'country_code' => 'PE', 'name' => 'Contralmirante Villar', 'active' => 1, 'slug' => 'contralmirante-villar'],
            ['id' => 355347, 'region_id' => 782269, 'country_code' => 'PE', 'name' => 'Tumbes', 'active' => 1, 'slug' => 'tumbes'],
            ['id' => 355348, 'region_id' => 782269, 'country_code' => 'PE', 'name' => 'Zarumilla', 'active' => 1, 'slug' => 'zarumilla'],
            ['id' => 355349, 'region_id' => 782270, 'country_code' => 'PE', 'name' => 'Atalaya', 'active' => 1, 'slug' => 'atalaya'],
            ['id' => 355350, 'region_id' => 782270, 'country_code' => 'PE', 'name' => 'Coronel Portillo', 'active' => 1, 'slug' => 'coronel-portillo'],
            ['id' => 355351, 'region_id' => 782270, 'country_code' => 'PE', 'name' => 'Padre Abad', 'active' => 1, 'slug' => 'padre-abad'],
            ['id' => 355352, 'region_id' => 782270, 'country_code' => 'PE', 'name' => 'Purus', 'active' => 1, 'slug' => 'purus']
    	];
    }
}
