<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class AngolaSeeder extends Seeder
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
    	return ['code' => 'AO', 'name' => 'Angola', 'slug' => 'angola'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 781520, 'country_code' => 'AO', 'name' => 'Bengo', 'active' => 1, 'slug' => 'bengo'],
            ['id' => 781526, 'country_code' => 'AO', 'name' => 'Benguela', 'active' => 1, 'slug' => 'benguela'],
            ['id' => 781536, 'country_code' => 'AO', 'name' => 'Bié', 'active' => 1, 'slug' => 'bie'],
            ['id' => 781545, 'country_code' => 'AO', 'name' => 'Cabinda', 'active' => 1, 'slug' => 'cabinda'],
            ['id' => 781550, 'country_code' => 'AO', 'name' => 'Cuando Cubango', 'active' => 1, 'slug' => 'cuando-cubango'],
            ['id' => 781559, 'country_code' => 'AO', 'name' => 'Cuanza Norte', 'active' => 1, 'slug' => 'cuanza-norte'],
            ['id' => 781572, 'country_code' => 'AO', 'name' => 'Cuanza Sur', 'active' => 1, 'slug' => 'cuanza-sur'],
            ['id' => 781585, 'country_code' => 'AO', 'name' => 'Cunene', 'active' => 1, 'slug' => 'cunene'],
            ['id' => 781592, 'country_code' => 'AO', 'name' => 'Huambo', 'active' => 1, 'slug' => 'huambo']
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
            ['id' => 44794, 'region_id' => 781520, 'country_code' => 'AO', 'name' => 'Ambriz', 'active' => 1, 'slug' => 'ambriz'],
            ['id' => 44795, 'region_id' => 781520, 'country_code' => 'AO', 'name' => 'Dande', 'active' => 1, 'slug' => 'dande'],
            ['id' => 44796, 'region_id' => 781520, 'country_code' => 'AO', 'name' => 'Icolo E Bengo', 'active' => 1, 'slug' => 'icolo-e-bengo'],
            ['id' => 44797, 'region_id' => 781520, 'country_code' => 'AO', 'name' => 'Muxima', 'active' => 1, 'slug' => 'muxima'],
            ['id' => 44798, 'region_id' => 781520, 'country_code' => 'AO', 'name' => 'Nambuangongo', 'active' => 1, 'slug' => 'nambuangongo'],
            ['id' => 44799, 'region_id' => 781526, 'country_code' => 'AO', 'name' => 'Baía Farta', 'active' => 1, 'slug' => 'baia-farta'],
            ['id' => 44800, 'region_id' => 781526, 'country_code' => 'AO', 'name' => 'Cubal', 'active' => 1, 'slug' => 'cubal'],
            ['id' => 44801, 'region_id' => 781526, 'country_code' => 'AO', 'name' => 'Chongoroi', 'active' => 1, 'slug' => 'chongoroi'],
            ['id' => 44802, 'region_id' => 781526, 'country_code' => 'AO', 'name' => 'Bocoio', 'active' => 1, 'slug' => 'bocoio'],
            ['id' => 44803, 'region_id' => 781526, 'country_code' => 'AO', 'name' => 'Caimbambo', 'active' => 1, 'slug' => 'caimbambo'],
            ['id' => 44804, 'region_id' => 781526, 'country_code' => 'AO', 'name' => 'Ganda', 'active' => 1, 'slug' => 'ganda'],
            ['id' => 44805, 'region_id' => 781526, 'country_code' => 'AO', 'name' => 'Benguela', 'active' => 1, 'slug' => 'benguela'],
            ['id' => 44806, 'region_id' => 781526, 'country_code' => 'AO', 'name' => 'Balombo', 'active' => 1, 'slug' => 'balombo'],
            ['id' => 44807, 'region_id' => 781526, 'country_code' => 'AO', 'name' => 'Lobito', 'active' => 1, 'slug' => 'lobito'],
            ['id' => 44808, 'region_id' => 781536, 'country_code' => 'AO', 'name' => 'Andulo', 'active' => 1, 'slug' => 'andulo'],
            ['id' => 44809, 'region_id' => 781536, 'country_code' => 'AO', 'name' => 'Camacupa', 'active' => 1, 'slug' => 'camacupa'],
            ['id' => 44810, 'region_id' => 781536, 'country_code' => 'AO', 'name' => 'Catabola', 'active' => 1, 'slug' => 'catabola'],
            ['id' => 44811, 'region_id' => 781536, 'country_code' => 'AO', 'name' => 'Chinguar', 'active' => 1, 'slug' => 'chinguar'],
            ['id' => 44812, 'region_id' => 781536, 'country_code' => 'AO', 'name' => 'Chitembo', 'active' => 1, 'slug' => 'chitembo'],
            ['id' => 44813, 'region_id' => 781536, 'country_code' => 'AO', 'name' => 'Cuemba', 'active' => 1, 'slug' => 'cuemba'],
            ['id' => 44814, 'region_id' => 781536, 'country_code' => 'AO', 'name' => 'Cunhinga', 'active' => 1, 'slug' => 'cunhinga'],
            ['id' => 44815, 'region_id' => 781536, 'country_code' => 'AO', 'name' => 'Nharea', 'active' => 1, 'slug' => 'nharea'],
            ['id' => 44816, 'region_id' => 781545, 'country_code' => 'AO', 'name' => 'Belice', 'active' => 1, 'slug' => 'belice'],
            ['id' => 44817, 'region_id' => 781545, 'country_code' => 'AO', 'name' => 'Buco Zau', 'active' => 1, 'slug' => 'buco-zau'],
            ['id' => 44818, 'region_id' => 781545, 'country_code' => 'AO', 'name' => 'Cabinda', 'active' => 1, 'slug' => 'cabinda'],
            ['id' => 44819, 'region_id' => 781545, 'country_code' => 'AO', 'name' => 'Cacongo', 'active' => 1, 'slug' => 'cacongo'],
            ['id' => 44820, 'region_id' => 781550, 'country_code' => 'AO', 'name' => 'Calai', 'active' => 1, 'slug' => 'calai'],
            ['id' => 44821, 'region_id' => 781550, 'country_code' => 'AO', 'name' => 'Cuangar', 'active' => 1, 'slug' => 'cuangar'],
            ['id' => 44822, 'region_id' => 781550, 'country_code' => 'AO', 'name' => 'Cuchi', 'active' => 1, 'slug' => 'cuchi'],
            ['id' => 44823, 'region_id' => 781550, 'country_code' => 'AO', 'name' => 'Cuito Cuanavale', 'active' => 1, 'slug' => 'cuito-cuanavale'],
            ['id' => 44824, 'region_id' => 781550, 'country_code' => 'AO', 'name' => 'Dirico', 'active' => 1, 'slug' => 'dirico'],
            ['id' => 44825, 'region_id' => 781550, 'country_code' => 'AO', 'name' => 'Mavinga', 'active' => 1, 'slug' => 'mavinga'],
            ['id' => 44826, 'region_id' => 781550, 'country_code' => 'AO', 'name' => 'Menongue', 'active' => 1, 'slug' => 'menongue'],
            ['id' => 44827, 'region_id' => 781550, 'country_code' => 'AO', 'name' => 'Nankova', 'active' => 1, 'slug' => 'nankova'],
            ['id' => 44828, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Ambaca', 'active' => 1, 'slug' => 'ambaca'],
            ['id' => 44829, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Banga', 'active' => 1, 'slug' => 'banga'],
            ['id' => 44830, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Bolongongo', 'active' => 1, 'slug' => 'bolongongo'],
            ['id' => 44831, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Bula Atumba', 'active' => 1, 'slug' => 'bula-atumba'],
            ['id' => 44832, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Cambambe', 'active' => 1, 'slug' => 'cambambe'],
            ['id' => 44833, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Cazengo', 'active' => 1, 'slug' => 'cazengo'],
            ['id' => 44834, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Dembos', 'active' => 1, 'slug' => 'dembos'],
            ['id' => 44835, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Golungo Alto', 'active' => 1, 'slug' => 'golungo-alto'],
            ['id' => 44836, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Gonguembo', 'active' => 1, 'slug' => 'gonguembo'],
            ['id' => 44837, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Lucala', 'active' => 1, 'slug' => 'lucala'],
            ['id' => 44838, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Pango Aluquém', 'active' => 1, 'slug' => 'pango-aluquem'],
            ['id' => 44839, 'region_id' => 781559, 'country_code' => 'AO', 'name' => 'Quiculungo', 'active' => 1, 'slug' => 'quiculungo'],
            ['id' => 44840, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Amboim', 'active' => 1, 'slug' => 'amboim'],
            ['id' => 44841, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Cassongue', 'active' => 1, 'slug' => 'cassongue'],
            ['id' => 44842, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Conda', 'active' => 1, 'slug' => 'conda'],
            ['id' => 44843, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Ebo', 'active' => 1, 'slug' => 'ebo'],
            ['id' => 44844, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Libolo', 'active' => 1, 'slug' => 'libolo'],
            ['id' => 44845, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Mussende', 'active' => 1, 'slug' => 'mussende'],
            ['id' => 44846, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Porto Amboim', 'active' => 1, 'slug' => 'porto-amboim'],
            ['id' => 44847, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Quibala', 'active' => 1, 'slug' => 'quibala'],
            ['id' => 44848, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Quilenda', 'active' => 1, 'slug' => 'quilenda'],
            ['id' => 44849, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Seles', 'active' => 1, 'slug' => 'seles'],
            ['id' => 44850, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Sumbe', 'active' => 1, 'slug' => 'sumbe'],
            ['id' => 44851, 'region_id' => 781572, 'country_code' => 'AO', 'name' => 'Waku Kungo', 'active' => 1, 'slug' => 'waku-kungo'],
            ['id' => 44852, 'region_id' => 781585, 'country_code' => 'AO', 'name' => 'Cahama', 'active' => 1, 'slug' => 'cahama'],
            ['id' => 44853, 'region_id' => 781585, 'country_code' => 'AO', 'name' => 'Kuvelai', 'active' => 1, 'slug' => 'kuvelai'],
            ['id' => 44854, 'region_id' => 781585, 'country_code' => 'AO', 'name' => 'Namakunde', 'active' => 1, 'slug' => 'namakunde'],
            ['id' => 44855, 'region_id' => 781585, 'country_code' => 'AO', 'name' => 'Ombadja', 'active' => 1, 'slug' => 'ombadja'],
            ['id' => 44856, 'region_id' => 781585, 'country_code' => 'AO', 'name' => 'Santa-clara', 'active' => 1, 'slug' => 'santa-clara'],
            ['id' => 44857, 'region_id' => 781585, 'country_code' => 'AO', 'name' => 'Xangongo', 'active' => 1, 'slug' => 'xangongo'],
            ['id' => 44858, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Bailundo', 'active' => 1, 'slug' => 'bailundo'],
            ['id' => 44859, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Caála', 'active' => 1, 'slug' => 'caala'],
            ['id' => 44860, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Ekunha', 'active' => 1, 'slug' => 'ekunha'],
            ['id' => 44861, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Huambo', 'active' => 1, 'slug' => 'huambo'],
            ['id' => 44862, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Katchiungo', 'active' => 1, 'slug' => 'katchiungo'],
            ['id' => 44863, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Londuimbali', 'active' => 1, 'slug' => 'londuimbali'],
            ['id' => 44864, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Longonjo', 'active' => 1, 'slug' => 'longonjo'],
            ['id' => 44865, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Mungo', 'active' => 1, 'slug' => 'mungo'],
            ['id' => 44866, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Tchikala-tcholohanga', 'active' => 1, 'slug' => 'tchikala-tcholohanga'],
            ['id' => 44867, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Tchindjenje', 'active' => 1, 'slug' => 'tchindjenje'],
            ['id' => 44868, 'region_id' => 781592, 'country_code' => 'AO', 'name' => 'Ukuma', 'active' => 1, 'slug' => 'ukuma']
    	];
    }
}
