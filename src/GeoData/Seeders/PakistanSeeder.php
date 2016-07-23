<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class PakistanSeeder extends Seeder
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
    	return ['code' => 'PK', 'name' => 'Pakistan', 'slug' => 'pakistan'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 782352, 'country_code' => 'PK', 'name' => 'Azad Kashmir', 'active' => 1, 'slug' => 'azad-kashmir'],
            ['id' => 782353, 'country_code' => 'PK', 'name' => 'Balochistan', 'active' => 1, 'slug' => 'balochistan'],
            ['id' => 782354, 'country_code' => 'PK', 'name' => 'Islamabad', 'active' => 1, 'slug' => 'islamabad'],
            ['id' => 782355, 'country_code' => 'PK', 'name' => 'Khyber Pakhtunkhwa', 'active' => 1, 'slug' => 'khyber-pakhtunkhwa'],
            ['id' => 782356, 'country_code' => 'PK', 'name' => 'Punjab', 'active' => 1, 'slug' => 'punjab'],
            ['id' => 782357, 'country_code' => 'PK', 'name' => 'Sindh', 'active' => 1, 'slug' => 'sindh']
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
            ['id' => 356848, 'region_id' => 782352, 'country_code' => 'PK', 'name' => 'Bhimber', 'active' => 1, 'slug' => 'bhimber'],
            ['id' => 356849, 'region_id' => 782352, 'country_code' => 'PK', 'name' => 'Kotli', 'active' => 1, 'slug' => 'kotli'],
            ['id' => 356850, 'region_id' => 782352, 'country_code' => 'PK', 'name' => 'Mirpur', 'active' => 1, 'slug' => 'mirpur'],
            ['id' => 356851, 'region_id' => 782352, 'country_code' => 'PK', 'name' => 'Muzaffarabad', 'active' => 1, 'slug' => 'muzaffarabad'],
            ['id' => 356852, 'region_id' => 782352, 'country_code' => 'PK', 'name' => 'Hattian', 'active' => 1, 'slug' => 'hattian'],
            ['id' => 356853, 'region_id' => 782352, 'country_code' => 'PK', 'name' => 'Neelum', 'active' => 1, 'slug' => 'neelum'],
            ['id' => 356854, 'region_id' => 782352, 'country_code' => 'PK', 'name' => 'Poonch', 'active' => 1, 'slug' => 'poonch'],
            ['id' => 356855, 'region_id' => 782352, 'country_code' => 'PK', 'name' => 'Haveli', 'active' => 1, 'slug' => 'haveli'],
            ['id' => 356856, 'region_id' => 782352, 'country_code' => 'PK', 'name' => 'Bagh', 'active' => 1, 'slug' => 'bagh'],
            ['id' => 356857, 'region_id' => 782352, 'country_code' => 'PK', 'name' => 'Sudhnati', 'active' => 1, 'slug' => 'sudhnati'],
            ['id' => 356858, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Khuzdar', 'active' => 1, 'slug' => 'khuzdar'],
            ['id' => 356859, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Turbat', 'active' => 1, 'slug' => 'turbat'],
            ['id' => 356860, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Chaman', 'active' => 1, 'slug' => 'chaman'],
            ['id' => 356861, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Hub', 'active' => 1, 'slug' => 'hub'],
            ['id' => 356862, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Sibi', 'active' => 1, 'slug' => 'sibi'],
            ['id' => 356863, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Zhob', 'active' => 1, 'slug' => 'zhob'],
            ['id' => 356864, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Gwadar', 'active' => 1, 'slug' => 'gwadar'],
            ['id' => 356865, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Dera Murad Jamali', 'active' => 1, 'slug' => 'dera-murad-jamali'],
            ['id' => 356866, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Dera Allah Yar', 'active' => 1, 'slug' => 'dera-allah-yar'],
            ['id' => 356867, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Usta Mohammad', 'active' => 1, 'slug' => 'usta-mohammad'],
            ['id' => 356868, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Loralai', 'active' => 1, 'slug' => 'loralai'],
            ['id' => 356869, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Kharan', 'active' => 1, 'slug' => 'kharan'],
            ['id' => 356870, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Mastung', 'active' => 1, 'slug' => 'mastung'],
            ['id' => 356871, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Nushki', 'active' => 1, 'slug' => 'nushki'],
            ['id' => 356872, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Kalat', 'active' => 1, 'slug' => 'kalat'],
            ['id' => 356873, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Pasni', 'active' => 1, 'slug' => 'pasni'],
            ['id' => 356874, 'region_id' => 782353, 'country_code' => 'PK', 'name' => 'Quetta', 'active' => 1, 'slug' => 'quetta'],
            ['id' => 356875, 'region_id' => 782354, 'country_code' => 'PK', 'name' => 'Islamabad', 'active' => 1, 'slug' => 'islamabad'],
            ['id' => 356876, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Abbottabad', 'active' => 1, 'slug' => 'abbottabad'],
            ['id' => 356877, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Adezai', 'active' => 1, 'slug' => 'adezai'],
            ['id' => 356878, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Alpuri', 'active' => 1, 'slug' => 'alpuri'],
            ['id' => 356879, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Ayubia', 'active' => 1, 'slug' => 'ayubia'],
            ['id' => 356880, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Banda Daud Shah', 'active' => 1, 'slug' => 'banda-daud-shah'],
            ['id' => 356881, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Bannu', 'active' => 1, 'slug' => 'bannu'],
            ['id' => 356882, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Batkhela', 'active' => 1, 'slug' => 'batkhela'],
            ['id' => 356883, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Battagram', 'active' => 1, 'slug' => 'battagram'],
            ['id' => 356884, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Birote', 'active' => 1, 'slug' => 'birote'],
            ['id' => 356885, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Chakdara', 'active' => 1, 'slug' => 'chakdara'],
            ['id' => 356886, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Charsadda', 'active' => 1, 'slug' => 'charsadda'],
            ['id' => 356887, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Chitral', 'active' => 1, 'slug' => 'chitral'],
            ['id' => 356888, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Daggar', 'active' => 1, 'slug' => 'daggar'],
            ['id' => 356889, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Dargai', 'active' => 1, 'slug' => 'dargai'],
            ['id' => 356890, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Darya Khan', 'active' => 1, 'slug' => 'darya-khan'],
            ['id' => 356891, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Dera Ismail Khan', 'active' => 1, 'slug' => 'dera-ismail-khan'],
            ['id' => 356892, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Dir', 'active' => 1, 'slug' => 'dir'],
            ['id' => 356893, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Drosh', 'active' => 1, 'slug' => 'drosh'],
            ['id' => 356894, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Hangu', 'active' => 1, 'slug' => 'hangu'],
            ['id' => 356895, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Haripur', 'active' => 1, 'slug' => 'haripur'],
            ['id' => 356896, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Karak', 'active' => 1, 'slug' => 'karak'],
            ['id' => 356897, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Kohat', 'active' => 1, 'slug' => 'kohat'],
            ['id' => 356898, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Lakki Marwat', 'active' => 1, 'slug' => 'lakki-marwat'],
            ['id' => 356899, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Latamber', 'active' => 1, 'slug' => 'latamber'],
            ['id' => 356900, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Madyan', 'active' => 1, 'slug' => 'madyan'],
            ['id' => 356901, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Mansehra', 'active' => 1, 'slug' => 'mansehra'],
            ['id' => 356902, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Mardan', 'active' => 1, 'slug' => 'mardan'],
            ['id' => 356903, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Mastuj', 'active' => 1, 'slug' => 'mastuj'],
            ['id' => 356904, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Nowshera', 'active' => 1, 'slug' => 'nowshera'],
            ['id' => 356905, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Paharpur', 'active' => 1, 'slug' => 'paharpur'],
            ['id' => 356906, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Saidu Sharif', 'active' => 1, 'slug' => 'saidu-sharif'],
            ['id' => 356907, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Swabi', 'active' => 1, 'slug' => 'swabi'],
            ['id' => 356908, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Swat', 'active' => 1, 'slug' => 'swat'],
            ['id' => 356909, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Tangi', 'active' => 1, 'slug' => 'tangi'],
            ['id' => 356910, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Tank', 'active' => 1, 'slug' => 'tank'],
            ['id' => 356911, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Thall', 'active' => 1, 'slug' => 'thall'],
            ['id' => 356912, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Timergara', 'active' => 1, 'slug' => 'timergara'],
            ['id' => 356913, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Tordher', 'active' => 1, 'slug' => 'tordher'],
            ['id' => 356914, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Bajaur Agency', 'active' => 1, 'slug' => 'bajaur-agency'],
            ['id' => 356915, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Mohmand Agency', 'active' => 1, 'slug' => 'mohmand-agency'],
            ['id' => 356916, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Khyber Agency', 'active' => 1, 'slug' => 'khyber-agency'],
            ['id' => 356917, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Frontier Region Peshawar', 'active' => 1, 'slug' => 'frontier-region-peshawar'],
            ['id' => 356918, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Frontier Region Kohat', 'active' => 1, 'slug' => 'frontier-region-kohat'],
            ['id' => 356919, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Orakzai Agency', 'active' => 1, 'slug' => 'orakzai-agency'],
            ['id' => 356920, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Kurram Agency', 'active' => 1, 'slug' => 'kurram-agency'],
            ['id' => 356921, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Frontier Region Bannu', 'active' => 1, 'slug' => 'frontier-region-bannu'],
            ['id' => 356922, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'North Waziristan Agency', 'active' => 1, 'slug' => 'north-waziristan-agency'],
            ['id' => 356923, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Frontier Region Lakki Marwat', 'active' => 1, 'slug' => 'frontier-region-lakki-marwat'],
            ['id' => 356924, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Frontier Region Tank', 'active' => 1, 'slug' => 'frontier-region-tank'],
            ['id' => 356925, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'South Waziristan Agency', 'active' => 1, 'slug' => 'south-waziristan-agency'],
            ['id' => 356926, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Frontier Region Dera Ismail Khan', 'active' => 1, 'slug' => 'frontier-region-dera-ismail-khan'],
            ['id' => 356927, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Mingora', 'active' => 1, 'slug' => 'mingora'],
            ['id' => 356928, 'region_id' => 782355, 'country_code' => 'PK', 'name' => 'Peshawar', 'active' => 1, 'slug' => 'peshawar'],
            ['id' => 356929, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Ahmed Nager Chatha', 'active' => 1, 'slug' => 'ahmed-nager-chatha'],
            ['id' => 356930, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Alipur', 'active' => 1, 'slug' => 'alipur'],
            ['id' => 356931, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Arifwala', 'active' => 1, 'slug' => 'arifwala'],
            ['id' => 356932, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Attock', 'active' => 1, 'slug' => 'attock'],
            ['id' => 356933, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Bhalwal', 'active' => 1, 'slug' => 'bhalwal'],
            ['id' => 356934, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Bahawalpur', 'active' => 1, 'slug' => 'bahawalpur'],
            ['id' => 356935, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Bhakkar', 'active' => 1, 'slug' => 'bhakkar'],
            ['id' => 356936, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Burewala', 'active' => 1, 'slug' => 'burewala'],
            ['id' => 356937, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Chillianwala', 'active' => 1, 'slug' => 'chillianwala'],
            ['id' => 356938, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Chakwal', 'active' => 1, 'slug' => 'chakwal'],
            ['id' => 356939, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Chiniot', 'active' => 1, 'slug' => 'chiniot'],
            ['id' => 356940, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Chishtian', 'active' => 1, 'slug' => 'chishtian'],
            ['id' => 356941, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Daska', 'active' => 1, 'slug' => 'daska'],
            ['id' => 356942, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Darya Khan', 'active' => 1, 'slug' => 'darya-khan'],
            ['id' => 356943, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Dera Ghazi Khan', 'active' => 1, 'slug' => 'dera-ghazi-khan'],
            ['id' => 356944, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Dhaular', 'active' => 1, 'slug' => 'dhaular'],
            ['id' => 356945, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Dina', 'active' => 1, 'slug' => 'dina'],
            ['id' => 356946, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Dinga', 'active' => 1, 'slug' => 'dinga'],
            ['id' => 356947, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Faisalabad', 'active' => 1, 'slug' => 'faisalabad'],
            ['id' => 356948, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Fateh Jang', 'active' => 1, 'slug' => 'fateh-jang'],
            ['id' => 356949, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Ghakhar Mandi', 'active' => 1, 'slug' => 'ghakhar-mandi'],
            ['id' => 356950, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Gojra', 'active' => 1, 'slug' => 'gojra'],
            ['id' => 356951, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Gujranwala', 'active' => 1, 'slug' => 'gujranwala'],
            ['id' => 356952, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Gujrat', 'active' => 1, 'slug' => 'gujrat'],
            ['id' => 356953, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Hafizabad', 'active' => 1, 'slug' => 'hafizabad'],
            ['id' => 356954, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Haroonabad', 'active' => 1, 'slug' => 'haroonabad'],
            ['id' => 356955, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Hasilpur', 'active' => 1, 'slug' => 'hasilpur'],
            ['id' => 356956, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Haveli Lakha', 'active' => 1, 'slug' => 'haveli-lakha'],
            ['id' => 356957, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Jampur', 'active' => 1, 'slug' => 'jampur'],
            ['id' => 356958, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Jaranwala', 'active' => 1, 'slug' => 'jaranwala'],
            ['id' => 356959, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Jhang', 'active' => 1, 'slug' => 'jhang'],
            ['id' => 356960, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Jhelum', 'active' => 1, 'slug' => 'jhelum'],
            ['id' => 356961, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Karor Lal Esan', 'active' => 1, 'slug' => 'karor-lal-esan'],
            ['id' => 356962, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Kasur', 'active' => 1, 'slug' => 'kasur'],
            ['id' => 356963, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Kāmoke', 'active' => 1, 'slug' => 'kamoke'],
            ['id' => 356964, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Khanewal', 'active' => 1, 'slug' => 'khanewal'],
            ['id' => 356965, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Khanpur', 'active' => 1, 'slug' => 'khanpur'],
            ['id' => 356966, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Kharian', 'active' => 1, 'slug' => 'kharian'],
            ['id' => 356967, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Khushab', 'active' => 1, 'slug' => 'khushab'],
            ['id' => 356968, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Kot Adu', 'active' => 1, 'slug' => 'kot-adu'],
            ['id' => 356969, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Lahore', 'active' => 1, 'slug' => 'lahore'],
            ['id' => 356970, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Lalamusa', 'active' => 1, 'slug' => 'lalamusa'],
            ['id' => 356971, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Layyah', 'active' => 1, 'slug' => 'layyah'],
            ['id' => 356972, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Liaquat Pur', 'active' => 1, 'slug' => 'liaquat-pur'],
            ['id' => 356973, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Lodhran', 'active' => 1, 'slug' => 'lodhran'],
            ['id' => 356974, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Mamoori', 'active' => 1, 'slug' => 'mamoori'],
            ['id' => 356975, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Mailsi', 'active' => 1, 'slug' => 'mailsi'],
            ['id' => 356976, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Mandi Bahauddin', 'active' => 1, 'slug' => 'mandi-bahauddin'],
            ['id' => 356977, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Mianwali', 'active' => 1, 'slug' => 'mianwali'],
            ['id' => 356978, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Multan', 'active' => 1, 'slug' => 'multan'],
            ['id' => 356979, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Muridke', 'active' => 1, 'slug' => 'muridke'],
            ['id' => 356980, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Mianwali Bangla', 'active' => 1, 'slug' => 'mianwali-bangla'],
            ['id' => 356981, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Muzaffargarh', 'active' => 1, 'slug' => 'muzaffargarh'],
            ['id' => 356982, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Narowal', 'active' => 1, 'slug' => 'narowal'],
            ['id' => 356983, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Okara', 'active' => 1, 'slug' => 'okara'],
            ['id' => 356984, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Pakpattan', 'active' => 1, 'slug' => 'pakpattan'],
            ['id' => 356985, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Qila Didar Singh', 'active' => 1, 'slug' => 'qila-didar-singh'],
            ['id' => 356986, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Rabwah', 'active' => 1, 'slug' => 'rabwah'],
            ['id' => 356987, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Rajanpur', 'active' => 1, 'slug' => 'rajanpur'],
            ['id' => 356988, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Rahim Yar Khan', 'active' => 1, 'slug' => 'rahim-yar-khan'],
            ['id' => 356989, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Rawalpindi', 'active' => 1, 'slug' => 'rawalpindi'],
            ['id' => 356990, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Sadiqabad', 'active' => 1, 'slug' => 'sadiqabad'],
            ['id' => 356991, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Safdarabad', 'active' => 1, 'slug' => 'safdarabad'],
            ['id' => 356992, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Sargodha', 'active' => 1, 'slug' => 'sargodha'],
            ['id' => 356993, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Shakargarh', 'active' => 1, 'slug' => 'shakargarh'],
            ['id' => 356994, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Sheikhupura', 'active' => 1, 'slug' => 'sheikhupura'],
            ['id' => 356995, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Sialkot', 'active' => 1, 'slug' => 'sialkot'],
            ['id' => 356996, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Sohawa', 'active' => 1, 'slug' => 'sohawa'],
            ['id' => 356997, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Soianwala', 'active' => 1, 'slug' => 'soianwala'],
            ['id' => 356998, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Siranwali', 'active' => 1, 'slug' => 'siranwali'],
            ['id' => 356999, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Taxila', 'active' => 1, 'slug' => 'taxila'],
            ['id' => 357000, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Toba Tek Singh', 'active' => 1, 'slug' => 'toba-tek-singh'],
            ['id' => 357001, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Vehari', 'active' => 1, 'slug' => 'vehari'],
            ['id' => 357002, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Wah Cantonment', 'active' => 1, 'slug' => 'wah-cantonment'],
            ['id' => 357003, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Wazirabad', 'active' => 1, 'slug' => 'wazirabad'],
            ['id' => 357004, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Kalabagh', 'active' => 1, 'slug' => 'kalabagh'],
            ['id' => 357005, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Murree', 'active' => 1, 'slug' => 'murree'],
            ['id' => 357006, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Raiwind', 'active' => 1, 'slug' => 'raiwind'],
            ['id' => 357007, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Pir Mahal', 'active' => 1, 'slug' => 'pir-mahal'],
            ['id' => 357008, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Renala Khurd', 'active' => 1, 'slug' => 'renala-khurd'],
            ['id' => 357009, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Sahiwal', 'active' => 1, 'slug' => 'sahiwal'],
            ['id' => 357010, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Sarai Alamgir', 'active' => 1, 'slug' => 'sarai-alamgir'],
            ['id' => 357011, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Talagang', 'active' => 1, 'slug' => 'talagang'],
            ['id' => 357012, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Jauharabad', 'active' => 1, 'slug' => 'jauharabad'],
            ['id' => 357013, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Sangla Hill', 'active' => 1, 'slug' => 'sangla-hill'],
            ['id' => 357014, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Gujar Khan', 'active' => 1, 'slug' => 'gujar-khan'],
            ['id' => 357015, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Pattoki', 'active' => 1, 'slug' => 'pattoki'],
            ['id' => 357016, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Dipalpur', 'active' => 1, 'slug' => 'dipalpur'],
            ['id' => 357017, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Mian Channu', 'active' => 1, 'slug' => 'mian-channu'],
            ['id' => 357018, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Chichawatni', 'active' => 1, 'slug' => 'chichawatni'],
            ['id' => 357019, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Jalalpur Jattan', 'active' => 1, 'slug' => 'jalalpur-jattan'],
            ['id' => 357020, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Kamalia', 'active' => 1, 'slug' => 'kamalia'],
            ['id' => 357021, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Ahmadpur East', 'active' => 1, 'slug' => 'ahmadpur-east'],
            ['id' => 357022, 'region_id' => 782356, 'country_code' => 'PK', 'name' => 'Bahawalnagar', 'active' => 1, 'slug' => 'bahawalnagar'],
            ['id' => 357023, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Badin', 'active' => 1, 'slug' => 'badin'],
            ['id' => 357024, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Bhirkan', 'active' => 1, 'slug' => 'bhirkan'],
            ['id' => 357025, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Chak', 'active' => 1, 'slug' => 'chak'],
            ['id' => 357026, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Dadu', 'active' => 1, 'slug' => 'dadu'],
            ['id' => 357027, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Dokri', 'active' => 1, 'slug' => 'dokri'],
            ['id' => 357028, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Ghotki', 'active' => 1, 'slug' => 'ghotki'],
            ['id' => 357029, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Haala', 'active' => 1, 'slug' => 'haala'],
            ['id' => 357030, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Hyderabad', 'active' => 1, 'slug' => 'hyderabad'],
            ['id' => 357031, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Jacobabad', 'active' => 1, 'slug' => 'jacobabad'],
            ['id' => 357032, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Jamshoro', 'active' => 1, 'slug' => 'jamshoro'],
            ['id' => 357033, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Jungshahi', 'active' => 1, 'slug' => 'jungshahi'],
            ['id' => 357034, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Kandhkot', 'active' => 1, 'slug' => 'kandhkot'],
            ['id' => 357035, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Khairpur', 'active' => 1, 'slug' => 'khairpur'],
            ['id' => 357036, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Kotri', 'active' => 1, 'slug' => 'kotri'],
            ['id' => 357037, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Larkana', 'active' => 1, 'slug' => 'larkana'],
            ['id' => 357038, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Matiari', 'active' => 1, 'slug' => 'matiari'],
            ['id' => 357039, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Mehar', 'active' => 1, 'slug' => 'mehar'],
            ['id' => 357040, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Mirpur Khas', 'active' => 1, 'slug' => 'mirpur-khas'],
            ['id' => 357041, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Mithani', 'active' => 1, 'slug' => 'mithani'],
            ['id' => 357042, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Mithi', 'active' => 1, 'slug' => 'mithi'],
            ['id' => 357043, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Mehrabpur', 'active' => 1, 'slug' => 'mehrabpur'],
            ['id' => 357044, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Nagarparkar', 'active' => 1, 'slug' => 'nagarparkar'],
            ['id' => 357045, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Naushahro Feroze', 'active' => 1, 'slug' => 'naushahro-feroze'],
            ['id' => 357046, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Naushara', 'active' => 1, 'slug' => 'naushara'],
            ['id' => 357047, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Nawabshah', 'active' => 1, 'slug' => 'nawabshah'],
            ['id' => 357048, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Nazimabad', 'active' => 1, 'slug' => 'nazimabad'],
            ['id' => 357049, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Ranipur', 'active' => 1, 'slug' => 'ranipur'],
            ['id' => 357050, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Sanghar', 'active' => 1, 'slug' => 'sanghar'],
            ['id' => 357051, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Shahbandar', 'active' => 1, 'slug' => 'shahbandar'],
            ['id' => 357052, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Shahdadkot', 'active' => 1, 'slug' => 'shahdadkot'],
            ['id' => 357053, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Shikarpaur', 'active' => 1, 'slug' => 'shikarpaur'],
            ['id' => 357054, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Sukkur', 'active' => 1, 'slug' => 'sukkur'],
            ['id' => 357055, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Tando Adam Khan', 'active' => 1, 'slug' => 'tando-adam-khan'],
            ['id' => 357056, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Tando Allahyar', 'active' => 1, 'slug' => 'tando-allahyar'],
            ['id' => 357057, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Tando Muhammad Khan', 'active' => 1, 'slug' => 'tando-muhammad-khan'],
            ['id' => 357058, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Thatta', 'active' => 1, 'slug' => 'thatta'],
            ['id' => 357059, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Qasimabad', 'active' => 1, 'slug' => 'qasimabad'],
            ['id' => 357060, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Umerkot', 'active' => 1, 'slug' => 'umerkot'],
            ['id' => 357061, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Warah', 'active' => 1, 'slug' => 'warah'],
            ['id' => 357062, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Keti Bandar', 'active' => 1, 'slug' => 'keti-bandar'],
            ['id' => 357063, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Rajo Khanani', 'active' => 1, 'slug' => 'rajo-khanani'],
            ['id' => 357064, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Diplo', 'active' => 1, 'slug' => 'diplo'],
            ['id' => 357065, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Islamkot', 'active' => 1, 'slug' => 'islamkot'],
            ['id' => 357066, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Shahpur Chakar', 'active' => 1, 'slug' => 'shahpur-chakar'],
            ['id' => 357067, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Kandiaro', 'active' => 1, 'slug' => 'kandiaro'],
            ['id' => 357068, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Sakrand', 'active' => 1, 'slug' => 'sakrand'],
            ['id' => 357069, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Digri', 'active' => 1, 'slug' => 'digri'],
            ['id' => 357070, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Naudero', 'active' => 1, 'slug' => 'naudero'],
            ['id' => 357071, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Kashmore', 'active' => 1, 'slug' => 'kashmore'],
            ['id' => 357072, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Ratodero', 'active' => 1, 'slug' => 'ratodero'],
            ['id' => 357073, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Rohri', 'active' => 1, 'slug' => 'rohri'],
            ['id' => 357074, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Shahdadpur', 'active' => 1, 'slug' => 'shahdadpur'],
            ['id' => 357075, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Moro', 'active' => 1, 'slug' => 'moro'],
            ['id' => 357076, 'region_id' => 782357, 'country_code' => 'PK', 'name' => 'Karachi', 'active' => 1, 'slug' => 'karachi']
    	];
    }
}
