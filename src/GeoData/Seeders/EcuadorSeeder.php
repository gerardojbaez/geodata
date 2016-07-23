<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class EcuadorSeeder extends Seeder
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
    	return ['code' => 'EC', 'name' => 'Ecuador', 'slug' => 'ecuador'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 781820, 'country_code' => 'EC', 'name' => 'Azuay', 'active' => 1, 'slug' => 'azuay'],
            ['id' => 781821, 'country_code' => 'EC', 'name' => 'Bolivar', 'active' => 1, 'slug' => 'bolivar'],
            ['id' => 781822, 'country_code' => 'EC', 'name' => 'Cañar', 'active' => 1, 'slug' => 'canar'],
            ['id' => 781823, 'country_code' => 'EC', 'name' => 'Carchi', 'active' => 1, 'slug' => 'carchi'],
            ['id' => 781824, 'country_code' => 'EC', 'name' => 'Chimborazo', 'active' => 1, 'slug' => 'chimborazo'],
            ['id' => 781825, 'country_code' => 'EC', 'name' => 'Cotopaxi', 'active' => 1, 'slug' => 'cotopaxi'],
            ['id' => 781826, 'country_code' => 'EC', 'name' => 'Esmeraldas', 'active' => 1, 'slug' => 'esmeraldas'],
            ['id' => 781827, 'country_code' => 'EC', 'name' => 'Galapagos', 'active' => 1, 'slug' => 'galapagos'],
            ['id' => 781828, 'country_code' => 'EC', 'name' => 'Guayas', 'active' => 1, 'slug' => 'guayas'],
            ['id' => 781829, 'country_code' => 'EC', 'name' => 'Imbabura', 'active' => 1, 'slug' => 'imbabura'],
            ['id' => 781830, 'country_code' => 'EC', 'name' => 'Loja', 'active' => 1, 'slug' => 'loja'],
            ['id' => 781831, 'country_code' => 'EC', 'name' => 'Manabi', 'active' => 1, 'slug' => 'manabi'],
            ['id' => 781832, 'country_code' => 'EC', 'name' => 'Napo', 'active' => 1, 'slug' => 'napo'],
            ['id' => 781833, 'country_code' => 'EC', 'name' => 'Orellana', 'active' => 1, 'slug' => 'orellana'],
            ['id' => 781834, 'country_code' => 'EC', 'name' => 'Pastaza', 'active' => 1, 'slug' => 'pastaza'],
            ['id' => 781835, 'country_code' => 'EC', 'name' => 'Pichincha', 'active' => 1, 'slug' => 'pichincha'],
            ['id' => 781836, 'country_code' => 'EC', 'name' => 'Sucumbios', 'active' => 1, 'slug' => 'sucumbios'],
            ['id' => 781837, 'country_code' => 'EC', 'name' => 'Tungurahua', 'active' => 1, 'slug' => 'tungurahua']
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
            ['id' => 191203, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Chordeleg', 'active' => 1, 'slug' => 'chordeleg'],
            ['id' => 191204, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'El Pan', 'active' => 1, 'slug' => 'el-pan'],
            ['id' => 191205, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Girón', 'active' => 1, 'slug' => 'giron'],
            ['id' => 191206, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Guachapala', 'active' => 1, 'slug' => 'guachapala'],
            ['id' => 191207, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Nabón', 'active' => 1, 'slug' => 'nabon'],
            ['id' => 191208, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Oña', 'active' => 1, 'slug' => 'ona'],
            ['id' => 191209, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Paute', 'active' => 1, 'slug' => 'paute'],
            ['id' => 191210, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Ponce Enriquez', 'active' => 1, 'slug' => 'ponce-enriquez'],
            ['id' => 191211, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Pucará', 'active' => 1, 'slug' => 'pucara'],
            ['id' => 191212, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'San Fernando', 'active' => 1, 'slug' => 'san-fernando'],
            ['id' => 191213, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Santa Isabel', 'active' => 1, 'slug' => 'santa-isabel'],
            ['id' => 191214, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Sevilla de Oro', 'active' => 1, 'slug' => 'sevilla-de-oro'],
            ['id' => 191215, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Sigsig', 'active' => 1, 'slug' => 'sigsig'],
            ['id' => 191216, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Gualaceo', 'active' => 1, 'slug' => 'gualaceo'],
            ['id' => 191217, 'region_id' => 781820, 'country_code' => 'EC', 'name' => 'Cuenca', 'active' => 1, 'slug' => 'cuenca'],
            ['id' => 191218, 'region_id' => 781821, 'country_code' => 'EC', 'name' => 'Cantón Caluma', 'active' => 1, 'slug' => 'canton-caluma'],
            ['id' => 191219, 'region_id' => 781821, 'country_code' => 'EC', 'name' => 'Cantón Chillanes', 'active' => 1, 'slug' => 'canton-chillanes'],
            ['id' => 191220, 'region_id' => 781821, 'country_code' => 'EC', 'name' => 'Cantón Chimbo', 'active' => 1, 'slug' => 'canton-chimbo'],
            ['id' => 191221, 'region_id' => 781821, 'country_code' => 'EC', 'name' => 'Cantón Echeandía', 'active' => 1, 'slug' => 'canton-echeandia'],
            ['id' => 191222, 'region_id' => 781821, 'country_code' => 'EC', 'name' => 'Cantón Guaranda', 'active' => 1, 'slug' => 'canton-guaranda'],
            ['id' => 191223, 'region_id' => 781821, 'country_code' => 'EC', 'name' => 'Cantón Las Naves', 'active' => 1, 'slug' => 'canton-las-naves'],
            ['id' => 191224, 'region_id' => 781821, 'country_code' => 'EC', 'name' => 'Cantón San Miguel', 'active' => 1, 'slug' => 'canton-san-miguel'],
            ['id' => 191225, 'region_id' => 781822, 'country_code' => 'EC', 'name' => 'Biblián', 'active' => 1, 'slug' => 'biblian'],
            ['id' => 191226, 'region_id' => 781822, 'country_code' => 'EC', 'name' => 'Déleg', 'active' => 1, 'slug' => 'deleg'],
            ['id' => 191227, 'region_id' => 781822, 'country_code' => 'EC', 'name' => 'El Tambo', 'active' => 1, 'slug' => 'el-tambo'],
            ['id' => 191228, 'region_id' => 781822, 'country_code' => 'EC', 'name' => 'Suscal', 'active' => 1, 'slug' => 'suscal'],
            ['id' => 191229, 'region_id' => 781822, 'country_code' => 'EC', 'name' => 'Cañar', 'active' => 1, 'slug' => 'canar'],
            ['id' => 191230, 'region_id' => 781822, 'country_code' => 'EC', 'name' => 'Azogues', 'active' => 1, 'slug' => 'azogues'],
            ['id' => 191231, 'region_id' => 781822, 'country_code' => 'EC', 'name' => 'La Troncal', 'active' => 1, 'slug' => 'la-troncal'],
            ['id' => 191232, 'region_id' => 781823, 'country_code' => 'EC', 'name' => 'Bolívar', 'active' => 1, 'slug' => 'bolivar'],
            ['id' => 191233, 'region_id' => 781823, 'country_code' => 'EC', 'name' => 'Mira', 'active' => 1, 'slug' => 'mira'],
            ['id' => 191234, 'region_id' => 781823, 'country_code' => 'EC', 'name' => 'Montúfar', 'active' => 1, 'slug' => 'montufar'],
            ['id' => 191235, 'region_id' => 781823, 'country_code' => 'EC', 'name' => 'San Pedro de Huaca', 'active' => 1, 'slug' => 'san-pedro-de-huaca'],
            ['id' => 191236, 'region_id' => 781823, 'country_code' => 'EC', 'name' => 'Tulcán', 'active' => 1, 'slug' => 'tulcan'],
            ['id' => 191237, 'region_id' => 781823, 'country_code' => 'EC', 'name' => 'Espejo', 'active' => 1, 'slug' => 'espejo'],
            ['id' => 191238, 'region_id' => 781824, 'country_code' => 'EC', 'name' => 'Chambo', 'active' => 1, 'slug' => 'chambo'],
            ['id' => 191239, 'region_id' => 781824, 'country_code' => 'EC', 'name' => 'Chunchi', 'active' => 1, 'slug' => 'chunchi'],
            ['id' => 191240, 'region_id' => 781824, 'country_code' => 'EC', 'name' => 'Colta', 'active' => 1, 'slug' => 'colta'],
            ['id' => 191241, 'region_id' => 781824, 'country_code' => 'EC', 'name' => 'Cumandá', 'active' => 1, 'slug' => 'cumanda'],
            ['id' => 191242, 'region_id' => 781824, 'country_code' => 'EC', 'name' => 'Guamote', 'active' => 1, 'slug' => 'guamote'],
            ['id' => 191243, 'region_id' => 781824, 'country_code' => 'EC', 'name' => 'Pallatanga', 'active' => 1, 'slug' => 'pallatanga'],
            ['id' => 191244, 'region_id' => 781824, 'country_code' => 'EC', 'name' => 'Penipe', 'active' => 1, 'slug' => 'penipe'],
            ['id' => 191245, 'region_id' => 781824, 'country_code' => 'EC', 'name' => 'Guano', 'active' => 1, 'slug' => 'guano'],
            ['id' => 191246, 'region_id' => 781824, 'country_code' => 'EC', 'name' => 'Alausí', 'active' => 1, 'slug' => 'alausi'],
            ['id' => 191247, 'region_id' => 781824, 'country_code' => 'EC', 'name' => 'Riobamba', 'active' => 1, 'slug' => 'riobamba'],
            ['id' => 191248, 'region_id' => 781825, 'country_code' => 'EC', 'name' => 'Pangua', 'active' => 1, 'slug' => 'pangua'],
            ['id' => 191249, 'region_id' => 781825, 'country_code' => 'EC', 'name' => 'Sigchos', 'active' => 1, 'slug' => 'sigchos'],
            ['id' => 191250, 'region_id' => 781825, 'country_code' => 'EC', 'name' => 'Saquisilí', 'active' => 1, 'slug' => 'saquisili'],
            ['id' => 191251, 'region_id' => 781825, 'country_code' => 'EC', 'name' => 'Salcedo', 'active' => 1, 'slug' => 'salcedo'],
            ['id' => 191252, 'region_id' => 781825, 'country_code' => 'EC', 'name' => 'Pujilí', 'active' => 1, 'slug' => 'pujili'],
            ['id' => 191253, 'region_id' => 781825, 'country_code' => 'EC', 'name' => 'La Maná', 'active' => 1, 'slug' => 'la-mana'],
            ['id' => 191254, 'region_id' => 781825, 'country_code' => 'EC', 'name' => 'Latacunga', 'active' => 1, 'slug' => 'latacunga'],
            ['id' => 191255, 'region_id' => 781826, 'country_code' => 'EC', 'name' => 'Atacames', 'active' => 1, 'slug' => 'atacames'],
            ['id' => 191256, 'region_id' => 781826, 'country_code' => 'EC', 'name' => 'Eloy Alfaro', 'active' => 1, 'slug' => 'eloy-alfaro'],
            ['id' => 191257, 'region_id' => 781826, 'country_code' => 'EC', 'name' => 'Esmeraldas', 'active' => 1, 'slug' => 'esmeraldas'],
            ['id' => 191258, 'region_id' => 781826, 'country_code' => 'EC', 'name' => 'Muisne', 'active' => 1, 'slug' => 'muisne'],
            ['id' => 191259, 'region_id' => 781826, 'country_code' => 'EC', 'name' => 'Río Verde', 'active' => 1, 'slug' => 'rio-verde'],
            ['id' => 191260, 'region_id' => 781826, 'country_code' => 'EC', 'name' => 'San Lorenzo', 'active' => 1, 'slug' => 'san-lorenzo'],
            ['id' => 191261, 'region_id' => 781826, 'country_code' => 'EC', 'name' => 'Quinindé', 'active' => 1, 'slug' => 'quininde'],
            ['id' => 191262, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Baltra', 'active' => 1, 'slug' => 'baltra'],
            ['id' => 191263, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Española', 'active' => 1, 'slug' => 'espanola'],
            ['id' => 191264, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Fernandina', 'active' => 1, 'slug' => 'fernandina'],
            ['id' => 191265, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Florcana', 'active' => 1, 'slug' => 'florcana'],
            ['id' => 191266, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Isabela', 'active' => 1, 'slug' => 'isabela'],
            ['id' => 191267, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Marchena', 'active' => 1, 'slug' => 'marchena'],
            ['id' => 191268, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Pinta', 'active' => 1, 'slug' => 'pinta'],
            ['id' => 191269, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Pinzon', 'active' => 1, 'slug' => 'pinzon'],
            ['id' => 191270, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Rabida', 'active' => 1, 'slug' => 'rabida'],
            ['id' => 191271, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'San Cristobal', 'active' => 1, 'slug' => 'san-cristobal'],
            ['id' => 191272, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Santa Cruz', 'active' => 1, 'slug' => 'santa-cruz'],
            ['id' => 191273, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Santa Fe', 'active' => 1, 'slug' => 'santa-fe'],
            ['id' => 191274, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Santiago (James)', 'active' => 1, 'slug' => 'santiago-james'],
            ['id' => 191275, 'region_id' => 781827, 'country_code' => 'EC', 'name' => 'Tower (Genovesa)', 'active' => 1, 'slug' => 'tower-genovesa'],
            ['id' => 191276, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'A. Baquerizo Moreno', 'active' => 1, 'slug' => 'a-baquerizo-moreno'],
            ['id' => 191277, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Balzar', 'active' => 1, 'slug' => 'balzar'],
            ['id' => 191278, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Daule', 'active' => 1, 'slug' => 'daule'],
            ['id' => 191279, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'El Empalme', 'active' => 1, 'slug' => 'el-empalme'],
            ['id' => 191280, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'El Triunfo', 'active' => 1, 'slug' => 'el-triunfo'],
            ['id' => 191281, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'General Elizalde', 'active' => 1, 'slug' => 'general-elizalde'],
            ['id' => 191282, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Isidro Ayora', 'active' => 1, 'slug' => 'isidro-ayora'],
            ['id' => 191283, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'La Libertad', 'active' => 1, 'slug' => 'la-libertad'],
            ['id' => 191284, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Marcelino Maridueña', 'active' => 1, 'slug' => 'marcelino-mariduena'],
            ['id' => 191285, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Milagro', 'active' => 1, 'slug' => 'milagro'],
            ['id' => 191286, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Naranjal', 'active' => 1, 'slug' => 'naranjal'],
            ['id' => 191287, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Nobol', 'active' => 1, 'slug' => 'nobol'],
            ['id' => 191288, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Palestina', 'active' => 1, 'slug' => 'palestina'],
            ['id' => 191289, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Playas', 'active' => 1, 'slug' => 'playas'],
            ['id' => 191290, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Salinas', 'active' => 1, 'slug' => 'salinas'],
            ['id' => 191291, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Salitre', 'active' => 1, 'slug' => 'salitre'],
            ['id' => 191292, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Santa Elena', 'active' => 1, 'slug' => 'santa-elena'],
            ['id' => 191293, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Santa Lucía', 'active' => 1, 'slug' => 'santa-lucia'],
            ['id' => 191294, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Simón Bolívar', 'active' => 1, 'slug' => 'simon-bolivar'],
            ['id' => 191295, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Lomas de Sargentillo', 'active' => 1, 'slug' => 'lomas-de-sargentillo'],
            ['id' => 191296, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Colimes', 'active' => 1, 'slug' => 'colimes'],
            ['id' => 191297, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Balao', 'active' => 1, 'slug' => 'balao'],
            ['id' => 191298, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Pedro Carbo', 'active' => 1, 'slug' => 'pedro-carbo'],
            ['id' => 191299, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Samborondón', 'active' => 1, 'slug' => 'samborondon'],
            ['id' => 191300, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Yaguachi', 'active' => 1, 'slug' => 'yaguachi'],
            ['id' => 191301, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'General Villamil', 'active' => 1, 'slug' => 'general-villamil'],
            ['id' => 191302, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Naranjito', 'active' => 1, 'slug' => 'naranjito'],
            ['id' => 191303, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Durán', 'active' => 1, 'slug' => 'duran'],
            ['id' => 191304, 'region_id' => 781828, 'country_code' => 'EC', 'name' => 'Guayaquil', 'active' => 1, 'slug' => 'guayaquil'],
            ['id' => 191305, 'region_id' => 781829, 'country_code' => 'EC', 'name' => 'Antonio Ante', 'active' => 1, 'slug' => 'antonio-ante'],
            ['id' => 191306, 'region_id' => 781829, 'country_code' => 'EC', 'name' => 'Ibarra', 'active' => 1, 'slug' => 'ibarra'],
            ['id' => 191307, 'region_id' => 781829, 'country_code' => 'EC', 'name' => 'Urcuquí', 'active' => 1, 'slug' => 'urcuqui'],
            ['id' => 191308, 'region_id' => 781829, 'country_code' => 'EC', 'name' => 'Pimampiro', 'active' => 1, 'slug' => 'pimampiro'],
            ['id' => 191309, 'region_id' => 781829, 'country_code' => 'EC', 'name' => 'Cotacachi', 'active' => 1, 'slug' => 'cotacachi'],
            ['id' => 191310, 'region_id' => 781829, 'country_code' => 'EC', 'name' => 'Otavalo', 'active' => 1, 'slug' => 'otavalo'],
            ['id' => 191311, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Chaguarpamba', 'active' => 1, 'slug' => 'chaguarpamba'],
            ['id' => 191312, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Espíndola', 'active' => 1, 'slug' => 'espindola'],
            ['id' => 191313, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Gonzamaná', 'active' => 1, 'slug' => 'gonzamana'],
            ['id' => 191314, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Olmedo', 'active' => 1, 'slug' => 'olmedo'],
            ['id' => 191315, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Paltas', 'active' => 1, 'slug' => 'paltas'],
            ['id' => 191316, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Pindal', 'active' => 1, 'slug' => 'pindal'],
            ['id' => 191317, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Puyango', 'active' => 1, 'slug' => 'puyango'],
            ['id' => 191318, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Quilanga', 'active' => 1, 'slug' => 'quilanga'],
            ['id' => 191319, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Saraguro', 'active' => 1, 'slug' => 'saraguro'],
            ['id' => 191320, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Sozoranga', 'active' => 1, 'slug' => 'sozoranga'],
            ['id' => 191321, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Zapotillo', 'active' => 1, 'slug' => 'zapotillo'],
            ['id' => 191322, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Celica', 'active' => 1, 'slug' => 'celica'],
            ['id' => 191323, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Macará', 'active' => 1, 'slug' => 'macara'],
            ['id' => 191324, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Calvas', 'active' => 1, 'slug' => 'calvas'],
            ['id' => 191325, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Catamayo', 'active' => 1, 'slug' => 'catamayo'],
            ['id' => 191326, 'region_id' => 781830, 'country_code' => 'EC', 'name' => 'Loja', 'active' => 1, 'slug' => 'loja'],
            ['id' => 191327, 'region_id' => 781831, 'country_code' => 'EC', 'name' => '24 de mayo', 'active' => 1, 'slug' => '24-de-mayo'],
            ['id' => 191328, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Bolívar', 'active' => 1, 'slug' => 'bolivar'],
            ['id' => 191329, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'El Carmen', 'active' => 1, 'slug' => 'el-carmen'],
            ['id' => 191330, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Flavio Alfaro', 'active' => 1, 'slug' => 'flavio-alfaro'],
            ['id' => 191331, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Jama', 'active' => 1, 'slug' => 'jama'],
            ['id' => 191332, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Jaramijó', 'active' => 1, 'slug' => 'jaramijo'],
            ['id' => 191333, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Junín', 'active' => 1, 'slug' => 'junin'],
            ['id' => 191334, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Olmedo', 'active' => 1, 'slug' => 'olmedo'],
            ['id' => 191335, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Pichincha', 'active' => 1, 'slug' => 'pichincha'],
            ['id' => 191336, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Puerto López', 'active' => 1, 'slug' => 'puerto-lopez'],
            ['id' => 191337, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Rocafuerte', 'active' => 1, 'slug' => 'rocafuerte'],
            ['id' => 191338, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'San Vicente', 'active' => 1, 'slug' => 'san-vicente'],
            ['id' => 191339, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Santa Ana', 'active' => 1, 'slug' => 'santa-ana'],
            ['id' => 191340, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Sucre', 'active' => 1, 'slug' => 'sucre'],
            ['id' => 191341, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Pedernales', 'active' => 1, 'slug' => 'pedernales'],
            ['id' => 191342, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Paján', 'active' => 1, 'slug' => 'pajan'],
            ['id' => 191343, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Tosagua', 'active' => 1, 'slug' => 'tosagua'],
            ['id' => 191344, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Montecristi', 'active' => 1, 'slug' => 'montecristi'],
            ['id' => 191345, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Jipijapa', 'active' => 1, 'slug' => 'jipijapa'],
            ['id' => 191346, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Chone', 'active' => 1, 'slug' => 'chone'],
            ['id' => 191347, 'region_id' => 781831, 'country_code' => 'EC', 'name' => 'Manta', 'active' => 1, 'slug' => 'manta'],
            ['id' => 191348, 'region_id' => 781832, 'country_code' => 'EC', 'name' => 'Carlos Julio Arosemena Tola', 'active' => 1, 'slug' => 'carlos-julio-arosemena-tola'],
            ['id' => 191349, 'region_id' => 781832, 'country_code' => 'EC', 'name' => 'El Chaco', 'active' => 1, 'slug' => 'el-chaco'],
            ['id' => 191350, 'region_id' => 781832, 'country_code' => 'EC', 'name' => 'Quijos', 'active' => 1, 'slug' => 'quijos'],
            ['id' => 191351, 'region_id' => 781832, 'country_code' => 'EC', 'name' => 'Archidona', 'active' => 1, 'slug' => 'archidona'],
            ['id' => 191352, 'region_id' => 781832, 'country_code' => 'EC', 'name' => 'Tena', 'active' => 1, 'slug' => 'tena'],
            ['id' => 191353, 'region_id' => 781833, 'country_code' => 'EC', 'name' => 'Aguarico', 'active' => 1, 'slug' => 'aguarico'],
            ['id' => 191354, 'region_id' => 781833, 'country_code' => 'EC', 'name' => 'Francisco de Orellana', 'active' => 1, 'slug' => 'francisco-de-orellana'],
            ['id' => 191355, 'region_id' => 781833, 'country_code' => 'EC', 'name' => 'La Joya de los Sachas', 'active' => 1, 'slug' => 'la-joya-de-los-sachas'],
            ['id' => 191356, 'region_id' => 781833, 'country_code' => 'EC', 'name' => 'Loreto', 'active' => 1, 'slug' => 'loreto'],
            ['id' => 191357, 'region_id' => 781834, 'country_code' => 'EC', 'name' => 'Arajuno', 'active' => 1, 'slug' => 'arajuno'],
            ['id' => 191358, 'region_id' => 781834, 'country_code' => 'EC', 'name' => 'Mera', 'active' => 1, 'slug' => 'mera'],
            ['id' => 191359, 'region_id' => 781834, 'country_code' => 'EC', 'name' => 'Pastaza', 'active' => 1, 'slug' => 'pastaza'],
            ['id' => 191360, 'region_id' => 781834, 'country_code' => 'EC', 'name' => 'Santa Clara', 'active' => 1, 'slug' => 'santa-clara'],
            ['id' => 191361, 'region_id' => 781835, 'country_code' => 'EC', 'name' => 'Los Bancos', 'active' => 1, 'slug' => 'los-bancos'],
            ['id' => 191362, 'region_id' => 781835, 'country_code' => 'EC', 'name' => 'Mejía', 'active' => 1, 'slug' => 'mejia'],
            ['id' => 191363, 'region_id' => 781835, 'country_code' => 'EC', 'name' => 'Pedro Moncayo', 'active' => 1, 'slug' => 'pedro-moncayo'],
            ['id' => 191364, 'region_id' => 781835, 'country_code' => 'EC', 'name' => 'Pedro Vicente Maldonado', 'active' => 1, 'slug' => 'pedro-vicente-maldonado'],
            ['id' => 191365, 'region_id' => 781835, 'country_code' => 'EC', 'name' => 'Puerto Quito', 'active' => 1, 'slug' => 'puerto-quito'],
            ['id' => 191366, 'region_id' => 781835, 'country_code' => 'EC', 'name' => 'Rumiñahui', 'active' => 1, 'slug' => 'ruminahui'],
            ['id' => 191367, 'region_id' => 781835, 'country_code' => 'EC', 'name' => 'Santo Domingo', 'active' => 1, 'slug' => 'santo-domingo'],
            ['id' => 191368, 'region_id' => 781835, 'country_code' => 'EC', 'name' => 'Cayambe', 'active' => 1, 'slug' => 'cayambe'],
            ['id' => 191369, 'region_id' => 781835, 'country_code' => 'EC', 'name' => 'Quito', 'active' => 1, 'slug' => 'quito'],
            ['id' => 191370, 'region_id' => 781836, 'country_code' => 'EC', 'name' => 'Cascales (D. Cascales)', 'active' => 1, 'slug' => 'cascales-d-cascales'],
            ['id' => 191371, 'region_id' => 781836, 'country_code' => 'EC', 'name' => 'Cuyabeno (Tarapoa)', 'active' => 1, 'slug' => 'cuyabeno-tarapoa'],
            ['id' => 191372, 'region_id' => 781836, 'country_code' => 'EC', 'name' => 'Gonzalo Pizarro (Lumbaqui)', 'active' => 1, 'slug' => 'gonzalo-pizarro-lumbaqui'],
            ['id' => 191373, 'region_id' => 781836, 'country_code' => 'EC', 'name' => 'Lago Agrio (Nueva Loja)', 'active' => 1, 'slug' => 'lago-agrio-nueva-loja'],
            ['id' => 191374, 'region_id' => 781836, 'country_code' => 'EC', 'name' => 'Putumayo (Puerto Carmen)', 'active' => 1, 'slug' => 'putumayo-puerto-carmen'],
            ['id' => 191375, 'region_id' => 781836, 'country_code' => 'EC', 'name' => 'Shushufindi (Shushufindi)', 'active' => 1, 'slug' => 'shushufindi-shushufindi'],
            ['id' => 191376, 'region_id' => 781836, 'country_code' => 'EC', 'name' => 'Sucumbíos (La Bonita)', 'active' => 1, 'slug' => 'sucumbios-la-bonita'],
            ['id' => 191377, 'region_id' => 781837, 'country_code' => 'EC', 'name' => 'Cevallos', 'active' => 1, 'slug' => 'cevallos'],
            ['id' => 191378, 'region_id' => 781837, 'country_code' => 'EC', 'name' => 'Mocha', 'active' => 1, 'slug' => 'mocha'],
            ['id' => 191379, 'region_id' => 781837, 'country_code' => 'EC', 'name' => 'Patate', 'active' => 1, 'slug' => 'patate'],
            ['id' => 191380, 'region_id' => 781837, 'country_code' => 'EC', 'name' => 'Pelileo', 'active' => 1, 'slug' => 'pelileo'],
            ['id' => 191381, 'region_id' => 781837, 'country_code' => 'EC', 'name' => 'Quero', 'active' => 1, 'slug' => 'quero'],
            ['id' => 191382, 'region_id' => 781837, 'country_code' => 'EC', 'name' => 'Tisaleo', 'active' => 1, 'slug' => 'tisaleo'],
            ['id' => 191383, 'region_id' => 781837, 'country_code' => 'EC', 'name' => 'Píllaro', 'active' => 1, 'slug' => 'pillaro'],
            ['id' => 191384, 'region_id' => 781837, 'country_code' => 'EC', 'name' => 'Baños', 'active' => 1, 'slug' => 'banos'],
            ['id' => 191385, 'region_id' => 781837, 'country_code' => 'EC', 'name' => 'Ambato', 'active' => 1, 'slug' => 'ambato']
    	];
    }
}
