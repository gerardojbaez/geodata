<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class IsraelSeeder extends Seeder
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
    	return ['code' => 'IL', 'name' => 'Israel', 'slug' => 'israel'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 780980, 'country_code' => 'IL', 'name' => 'Norte Israel', 'active' => 1, 'slug' => 'norte-israel'],
            ['id' => 780997, 'country_code' => 'IL', 'name' => 'Haifa', 'active' => 1, 'slug' => 'haifa'],
            ['id' => 781010, 'country_code' => 'IL', 'name' => 'Centro Israel', 'active' => 1, 'slug' => 'centro-israel'],
            ['id' => 781028, 'country_code' => 'IL', 'name' => 'Tel Aviv', 'active' => 1, 'slug' => 'tel-aviv'],
            ['id' => 781039, 'country_code' => 'IL', 'name' => 'Jerusalem', 'active' => 1, 'slug' => 'jerusalem'],
            ['id' => 781042, 'country_code' => 'IL', 'name' => 'Sur Israel', 'active' => 1, 'slug' => 'sur-israel'],
            ['id' => 781055, 'country_code' => 'IL', 'name' => 'Judea y Samaria', 'active' => 1, 'slug' => 'judea-y-samaria']
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
            ['id' => 44325, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Afula', 'active' => 1, 'slug' => 'afula'],
            ['id' => 44326, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Akko', 'active' => 1, 'slug' => 'akko'],
            ['id' => 44327, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Bet Shean', 'active' => 1, 'slug' => 'bet-shean'],
            ['id' => 44328, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Carmiel', 'active' => 1, 'slug' => 'carmiel'],
            ['id' => 44329, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Maalot-tarshija', 'active' => 1, 'slug' => 'maalot-tarshija'],
            ['id' => 44330, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Migdal Haemek', 'active' => 1, 'slug' => 'migdal-haemek'],
            ['id' => 44331, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Naharia', 'active' => 1, 'slug' => 'naharia'],
            ['id' => 44332, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Nazaret', 'active' => 1, 'slug' => 'nazaret'],
            ['id' => 44333, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Natzeret Illit', 'active' => 1, 'slug' => 'natzeret-illit'],
            ['id' => 44334, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Kiriat Shemona', 'active' => 1, 'slug' => 'kiriat-shemona'],
            ['id' => 44335, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Tzfat', 'active' => 1, 'slug' => 'tzfat'],
            ['id' => 44336, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Sakhnin', 'active' => 1, 'slug' => 'sakhnin'],
            ['id' => 44337, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Shagor', 'active' => 1, 'slug' => 'shagor'],
            ['id' => 44338, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Shefa-amr', 'active' => 1, 'slug' => 'shefa-amr'],
            ['id' => 44339, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Tamra', 'active' => 1, 'slug' => 'tamra'],
            ['id' => 44340, 'region_id' => 780980, 'country_code' => 'IL', 'name' => 'Tiberia', 'active' => 1, 'slug' => 'tiberia'],
            ['id' => 44341, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Baqa-jat', 'active' => 1, 'slug' => 'baqa-jat'],
            ['id' => 44342, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Ciudad de Carmel', 'active' => 1, 'slug' => 'ciudad-de-carmel'],
            ['id' => 44343, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Hadera', 'active' => 1, 'slug' => 'hadera'],
            ['id' => 44344, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Haifa', 'active' => 1, 'slug' => 'haifa'],
            ['id' => 44345, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Nesher', 'active' => 1, 'slug' => 'nesher'],
            ['id' => 44346, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Or Akiva', 'active' => 1, 'slug' => 'or-akiva'],
            ['id' => 44347, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Kiriat Atta', 'active' => 1, 'slug' => 'kiriat-atta'],
            ['id' => 44348, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Kiriat Bialik', 'active' => 1, 'slug' => 'kiriat-bialik'],
            ['id' => 44349, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Kiriat Motzkin', 'active' => 1, 'slug' => 'kiriat-motzkin'],
            ['id' => 44350, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Kiriat Yam', 'active' => 1, 'slug' => 'kiriat-yam'],
            ['id' => 44351, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Tirat Karmel', 'active' => 1, 'slug' => 'tirat-karmel'],
            ['id' => 44352, 'region_id' => 780997, 'country_code' => 'IL', 'name' => 'Umm Al-fahm', 'active' => 1, 'slug' => 'umm-al-fahm'],
            ['id' => 44353, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Hod Hasharon', 'active' => 1, 'slug' => 'hod-hasharon'],
            ['id' => 44354, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Kfar Saba', 'active' => 1, 'slug' => 'kfar-saba'],
            ['id' => 44355, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Lod', 'active' => 1, 'slug' => 'lod'],
            ['id' => 44356, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Modiin-maccabim-reut', 'active' => 1, 'slug' => 'modiin-maccabim-reut'],
            ['id' => 44357, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Ness Tziona', 'active' => 1, 'slug' => 'ness-tziona'],
            ['id' => 44358, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Netania', 'active' => 1, 'slug' => 'netania'],
            ['id' => 44359, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Petaj Tikva', 'active' => 1, 'slug' => 'petaj-tikva'],
            ['id' => 44360, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Qalansawe', 'active' => 1, 'slug' => 'qalansawe'],
            ['id' => 44361, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Raanana', 'active' => 1, 'slug' => 'raanana'],
            ['id' => 44362, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Ramla', 'active' => 1, 'slug' => 'ramla'],
            ['id' => 44363, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Rejovot', 'active' => 1, 'slug' => 'rejovot'],
            ['id' => 44364, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Rishon Letzion', 'active' => 1, 'slug' => 'rishon-letzion'],
            ['id' => 44365, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Rosh Haayin', 'active' => 1, 'slug' => 'rosh-haayin'],
            ['id' => 44366, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Tayibe', 'active' => 1, 'slug' => 'tayibe'],
            ['id' => 44367, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Tira', 'active' => 1, 'slug' => 'tira'],
            ['id' => 44368, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Yavne', 'active' => 1, 'slug' => 'yavne'],
            ['id' => 44369, 'region_id' => 781010, 'country_code' => 'IL', 'name' => 'Yehud-monosson', 'active' => 1, 'slug' => 'yehud-monosson'],
            ['id' => 44370, 'region_id' => 781028, 'country_code' => 'IL', 'name' => 'Bat Yam', 'active' => 1, 'slug' => 'bat-yam'],
            ['id' => 44371, 'region_id' => 781028, 'country_code' => 'IL', 'name' => 'Bnei Brak', 'active' => 1, 'slug' => 'bnei-brak'],
            ['id' => 44372, 'region_id' => 781028, 'country_code' => 'IL', 'name' => 'Givatayim', 'active' => 1, 'slug' => 'givatayim'],
            ['id' => 44373, 'region_id' => 781028, 'country_code' => 'IL', 'name' => 'Hertzlia', 'active' => 1, 'slug' => 'hertzlia'],
            ['id' => 44374, 'region_id' => 781028, 'country_code' => 'IL', 'name' => 'Jolón', 'active' => 1, 'slug' => 'jolon'],
            ['id' => 44375, 'region_id' => 781028, 'country_code' => 'IL', 'name' => 'Or Yehuda', 'active' => 1, 'slug' => 'or-yehuda'],
            ['id' => 44376, 'region_id' => 781028, 'country_code' => 'IL', 'name' => 'Kiriat Ono', 'active' => 1, 'slug' => 'kiriat-ono'],
            ['id' => 44377, 'region_id' => 781028, 'country_code' => 'IL', 'name' => 'Ramat Gan', 'active' => 1, 'slug' => 'ramat-gan'],
            ['id' => 44378, 'region_id' => 781028, 'country_code' => 'IL', 'name' => 'Ramat Hasharon', 'active' => 1, 'slug' => 'ramat-hasharon'],
            ['id' => 44379, 'region_id' => 781028, 'country_code' => 'IL', 'name' => 'Tel Aviv-yafo', 'active' => 1, 'slug' => 'tel-aviv-yafo'],
            ['id' => 44380, 'region_id' => 781039, 'country_code' => 'IL', 'name' => 'Bet Shemesh', 'active' => 1, 'slug' => 'bet-shemesh'],
            ['id' => 44381, 'region_id' => 781039, 'country_code' => 'IL', 'name' => 'Jerusalem', 'active' => 1, 'slug' => 'jerusalem'],
            ['id' => 44382, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Arad', 'active' => 1, 'slug' => 'arad'],
            ['id' => 44383, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Ashdod', 'active' => 1, 'slug' => 'ashdod'],
            ['id' => 44384, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Ashkelon', 'active' => 1, 'slug' => 'ashkelon'],
            ['id' => 44385, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Beer Sheva', 'active' => 1, 'slug' => 'beer-sheva'],
            ['id' => 44386, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Dimona', 'active' => 1, 'slug' => 'dimona'],
            ['id' => 44387, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Eilat', 'active' => 1, 'slug' => 'eilat'],
            ['id' => 44388, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Netivot', 'active' => 1, 'slug' => 'netivot'],
            ['id' => 44389, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Ofakim', 'active' => 1, 'slug' => 'ofakim'],
            ['id' => 44390, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Kiriat Gat', 'active' => 1, 'slug' => 'kiriat-gat'],
            ['id' => 44391, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Kiriat Malaji', 'active' => 1, 'slug' => 'kiriat-malaji'],
            ['id' => 44392, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Rahat', 'active' => 1, 'slug' => 'rahat'],
            ['id' => 44393, 'region_id' => 781042, 'country_code' => 'IL', 'name' => 'Sderot', 'active' => 1, 'slug' => 'sderot'],
            ['id' => 44394, 'region_id' => 781055, 'country_code' => 'IL', 'name' => 'Ariel', 'active' => 1, 'slug' => 'ariel'],
            ['id' => 44395, 'region_id' => 781055, 'country_code' => 'IL', 'name' => 'Beitar Illit', 'active' => 1, 'slug' => 'beitar-illit'],
            ['id' => 44396, 'region_id' => 781055, 'country_code' => 'IL', 'name' => 'Maalé Adumim', 'active' => 1, 'slug' => 'maale-adumim'],
            ['id' => 44397, 'region_id' => 781055, 'country_code' => 'IL', 'name' => 'Givat Zeev', 'active' => 1, 'slug' => 'givat-zeev']
    	];
    }
}
