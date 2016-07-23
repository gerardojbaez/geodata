<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class DenmarkSeeder extends Seeder
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
    	return ['code' => 'DK', 'name' => 'Denmark', 'slug' => 'denmark'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 738382, 'country_code' => 'DK', 'name' => 'Hovedstaden', 'active' => 1, 'slug' => 'hovedstaden'],
            ['id' => 738412, 'country_code' => 'DK', 'name' => 'Midtjylland', 'active' => 1, 'slug' => 'midtjylland'],
            ['id' => 738432, 'country_code' => 'DK', 'name' => 'Nordjylland', 'active' => 1, 'slug' => 'nordjylland'],
            ['id' => 738444, 'country_code' => 'DK', 'name' => 'Sjælland', 'active' => 1, 'slug' => 'sj%c3%a6lland'],
            ['id' => 738462, 'country_code' => 'DK', 'name' => 'Syddanmark', 'active' => 1, 'slug' => 'syddanmark']
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
            ['id' => 32673, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Albertslund', 'active' => 1, 'slug' => 'albertslund'],
            ['id' => 32674, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Allerød', 'active' => 1, 'slug' => 'aller%c3%b8d'],
            ['id' => 32675, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Ballerup', 'active' => 1, 'slug' => 'ballerup'],
            ['id' => 32676, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Bornholm', 'active' => 1, 'slug' => 'bornholm'],
            ['id' => 32677, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Brøndby', 'active' => 1, 'slug' => 'br%c3%b8ndby'],
            ['id' => 32678, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Copenhague', 'active' => 1, 'slug' => 'copenhague'],
            ['id' => 32679, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Dragør', 'active' => 1, 'slug' => 'drag%c3%b8r'],
            ['id' => 32680, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Egedal', 'active' => 1, 'slug' => 'egedal'],
            ['id' => 32681, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Fredensborg', 'active' => 1, 'slug' => 'fredensborg'],
            ['id' => 32682, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Frederiksberg', 'active' => 1, 'slug' => 'frederiksberg'],
            ['id' => 32683, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Frederikssund', 'active' => 1, 'slug' => 'frederikssund'],
            ['id' => 32684, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Frederiksværk-Hundested', 'active' => 1, 'slug' => 'frederiksv%c3%a6rk-hundested'],
            ['id' => 32685, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Furesø', 'active' => 1, 'slug' => 'fures%c3%b8'],
            ['id' => 32686, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Gentofte', 'active' => 1, 'slug' => 'gentofte'],
            ['id' => 32687, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Gladsaxe', 'active' => 1, 'slug' => 'gladsaxe'],
            ['id' => 32688, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Glostrup', 'active' => 1, 'slug' => 'glostrup'],
            ['id' => 32689, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Gribskov', 'active' => 1, 'slug' => 'gribskov'],
            ['id' => 32690, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Helsingør', 'active' => 1, 'slug' => 'helsing%c3%b8r'],
            ['id' => 32691, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Herlev', 'active' => 1, 'slug' => 'herlev'],
            ['id' => 32692, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Hillerød', 'active' => 1, 'slug' => 'hiller%c3%b8d'],
            ['id' => 32693, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Hvidovre', 'active' => 1, 'slug' => 'hvidovre'],
            ['id' => 32694, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Høje-Taastrup', 'active' => 1, 'slug' => 'h%c3%b8je-taastrup'],
            ['id' => 32695, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Hørsholm', 'active' => 1, 'slug' => 'h%c3%b8rsholm'],
            ['id' => 32696, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Ishøj', 'active' => 1, 'slug' => 'ish%c3%b8j'],
            ['id' => 32697, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Lyngby-Taarbæk', 'active' => 1, 'slug' => 'lyngby-taarb%c3%a6k'],
            ['id' => 32698, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Rudersdal', 'active' => 1, 'slug' => 'rudersdal'],
            ['id' => 32699, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Rødovre', 'active' => 1, 'slug' => 'r%c3%b8dovre'],
            ['id' => 32700, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Tårnby', 'active' => 1, 'slug' => 'tarnby'],
            ['id' => 32701, 'region_id' => 738382, 'country_code' => 'DK', 'name' => 'Vallensbæk', 'active' => 1, 'slug' => 'vallensb%c3%a6k'],
            ['id' => 32702, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Århus', 'active' => 1, 'slug' => 'arhus'],
            ['id' => 32703, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Favrskov', 'active' => 1, 'slug' => 'favrskov'],
            ['id' => 32704, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Hedensted', 'active' => 1, 'slug' => 'hedensted'],
            ['id' => 32705, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Herning', 'active' => 1, 'slug' => 'herning'],
            ['id' => 32706, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Holstebro', 'active' => 1, 'slug' => 'holstebro'],
            ['id' => 32707, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Horsens', 'active' => 1, 'slug' => 'horsens'],
            ['id' => 32708, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Ikast-Brande', 'active' => 1, 'slug' => 'ikast-brande'],
            ['id' => 32709, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Lemvig', 'active' => 1, 'slug' => 'lemvig'],
            ['id' => 32710, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Norddjurs', 'active' => 1, 'slug' => 'norddjurs'],
            ['id' => 32711, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Odder', 'active' => 1, 'slug' => 'odder'],
            ['id' => 32712, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Randers', 'active' => 1, 'slug' => 'randers'],
            ['id' => 32713, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Ringkøbing-Skjern', 'active' => 1, 'slug' => 'ringk%c3%b8bing-skjern'],
            ['id' => 32714, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Samsø', 'active' => 1, 'slug' => 'sams%c3%b8'],
            ['id' => 32715, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Silkeborg', 'active' => 1, 'slug' => 'silkeborg'],
            ['id' => 32716, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Skanderborg', 'active' => 1, 'slug' => 'skanderborg'],
            ['id' => 32717, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Skive', 'active' => 1, 'slug' => 'skive'],
            ['id' => 32718, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Struer', 'active' => 1, 'slug' => 'struer'],
            ['id' => 32719, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Syddjurs', 'active' => 1, 'slug' => 'syddjurs'],
            ['id' => 32720, 'region_id' => 738412, 'country_code' => 'DK', 'name' => 'Viborg', 'active' => 1, 'slug' => 'viborg'],
            ['id' => 32721, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Ålborg', 'active' => 1, 'slug' => 'alborg'],
            ['id' => 32722, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Brønderslev', 'active' => 1, 'slug' => 'br%c3%b8nderslev'],
            ['id' => 32723, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Frederikshavn', 'active' => 1, 'slug' => 'frederikshavn'],
            ['id' => 32724, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Hjørring', 'active' => 1, 'slug' => 'hj%c3%b8rring'],
            ['id' => 32725, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Jammerbugt', 'active' => 1, 'slug' => 'jammerbugt'],
            ['id' => 32726, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Læsø', 'active' => 1, 'slug' => 'l%c3%a6s%c3%b8'],
            ['id' => 32727, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Mariagerfjord', 'active' => 1, 'slug' => 'mariagerfjord'],
            ['id' => 32728, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Morsø', 'active' => 1, 'slug' => 'mors%c3%b8'],
            ['id' => 32729, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Rebild', 'active' => 1, 'slug' => 'rebild'],
            ['id' => 32730, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Thisted', 'active' => 1, 'slug' => 'thisted'],
            ['id' => 32731, 'region_id' => 738432, 'country_code' => 'DK', 'name' => 'Vesthimmerland', 'active' => 1, 'slug' => 'vesthimmerland'],
            ['id' => 32732, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Faxe', 'active' => 1, 'slug' => 'faxe'],
            ['id' => 32733, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Greve', 'active' => 1, 'slug' => 'greve'],
            ['id' => 32734, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Guldborgsund', 'active' => 1, 'slug' => 'guldborgsund'],
            ['id' => 32735, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Holbæk', 'active' => 1, 'slug' => 'holb%c3%a6k'],
            ['id' => 32736, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Kalundborg', 'active' => 1, 'slug' => 'kalundborg'],
            ['id' => 32737, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Køge', 'active' => 1, 'slug' => 'k%c3%b8ge'],
            ['id' => 32738, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Lejre', 'active' => 1, 'slug' => 'lejre'],
            ['id' => 32739, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Lolland', 'active' => 1, 'slug' => 'lolland'],
            ['id' => 32740, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Næstved', 'active' => 1, 'slug' => 'n%c3%a6stved'],
            ['id' => 32741, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Odsherred', 'active' => 1, 'slug' => 'odsherred'],
            ['id' => 32742, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Ringsted', 'active' => 1, 'slug' => 'ringsted'],
            ['id' => 32743, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Roskilde', 'active' => 1, 'slug' => 'roskilde'],
            ['id' => 32744, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Slagelse', 'active' => 1, 'slug' => 'slagelse'],
            ['id' => 32745, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Solrød', 'active' => 1, 'slug' => 'solr%c3%b8d'],
            ['id' => 32746, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Sorø', 'active' => 1, 'slug' => 'sor%c3%b8'],
            ['id' => 32747, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Stevns', 'active' => 1, 'slug' => 'stevns'],
            ['id' => 32748, 'region_id' => 738444, 'country_code' => 'DK', 'name' => 'Vordingborg', 'active' => 1, 'slug' => 'vordingborg'],
            ['id' => 32749, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Aabenraa', 'active' => 1, 'slug' => 'aabenraa'],
            ['id' => 32750, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Assens', 'active' => 1, 'slug' => 'assens'],
            ['id' => 32751, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Billund', 'active' => 1, 'slug' => 'billund'],
            ['id' => 32752, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Esbjerg', 'active' => 1, 'slug' => 'esbjerg'],
            ['id' => 32753, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Faaborg-Midtfyn', 'active' => 1, 'slug' => 'faaborg-midtfyn'],
            ['id' => 32754, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Fanø', 'active' => 1, 'slug' => 'fan%c3%b8'],
            ['id' => 32755, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Fredericia', 'active' => 1, 'slug' => 'fredericia'],
            ['id' => 32756, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Haderslev', 'active' => 1, 'slug' => 'haderslev'],
            ['id' => 32757, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Kerteminde', 'active' => 1, 'slug' => 'kerteminde'],
            ['id' => 32758, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Kolding', 'active' => 1, 'slug' => 'kolding'],
            ['id' => 32759, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Langeland', 'active' => 1, 'slug' => 'langeland'],
            ['id' => 32760, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Middelfart', 'active' => 1, 'slug' => 'middelfart'],
            ['id' => 32761, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Nordfyn', 'active' => 1, 'slug' => 'nordfyn'],
            ['id' => 32762, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Nyborg', 'active' => 1, 'slug' => 'nyborg'],
            ['id' => 32763, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Odense', 'active' => 1, 'slug' => 'odense'],
            ['id' => 32764, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Svendborg', 'active' => 1, 'slug' => 'svendborg'],
            ['id' => 32765, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Sønderborg', 'active' => 1, 'slug' => 's%c3%b8nderborg'],
            ['id' => 32766, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Tønder', 'active' => 1, 'slug' => 't%c3%b8nder'],
            ['id' => 32767, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Varde', 'active' => 1, 'slug' => 'varde'],
            ['id' => 32768, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Vejen', 'active' => 1, 'slug' => 'vejen'],
            ['id' => 32769, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Vejle', 'active' => 1, 'slug' => 'vejle'],
            ['id' => 32770, 'region_id' => 738462, 'country_code' => 'DK', 'name' => 'Ærø', 'active' => 1, 'slug' => '%c3%86r%c3%b8']
    	];
    }
}
