<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class ThailandSeeder extends Seeder
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
    	return ['code' => 'TH', 'name' => 'Thailand', 'slug' => 'thailand'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 782702, 'country_code' => 'TH', 'name' => 'Central', 'active' => 1, 'slug' => 'central'],
            ['id' => 782703, 'country_code' => 'TH', 'name' => 'East', 'active' => 1, 'slug' => 'east'],
            ['id' => 782704, 'country_code' => 'TH', 'name' => 'North', 'active' => 1, 'slug' => 'north'],
            ['id' => 782705, 'country_code' => 'TH', 'name' => 'North-East', 'active' => 1, 'slug' => 'north-east'],
            ['id' => 782706, 'country_code' => 'TH', 'name' => 'South', 'active' => 1, 'slug' => 'south'],
            ['id' => 782707, 'country_code' => 'TH', 'name' => 'West', 'active' => 1, 'slug' => 'west']
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
            ['id' => 463144, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Ang Thong', 'active' => 1, 'slug' => 'ang-thong'],
            ['id' => 463145, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Ayutthaya', 'active' => 1, 'slug' => 'ayutthaya'],
            ['id' => 463146, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Chainat', 'active' => 1, 'slug' => 'chainat'],
            ['id' => 463147, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Kamphaeng Phet', 'active' => 1, 'slug' => 'kamphaeng-phet'],
            ['id' => 463148, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Lopburi', 'active' => 1, 'slug' => 'lopburi'],
            ['id' => 463149, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Nakhon Nayok', 'active' => 1, 'slug' => 'nakhon-nayok'],
            ['id' => 463150, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Nakhon Pathom', 'active' => 1, 'slug' => 'nakhon-pathom'],
            ['id' => 463151, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Nakhon Sawan', 'active' => 1, 'slug' => 'nakhon-sawan'],
            ['id' => 463152, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Nonthaburi', 'active' => 1, 'slug' => 'nonthaburi'],
            ['id' => 463153, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Pathum Thani', 'active' => 1, 'slug' => 'pathum-thani'],
            ['id' => 463154, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Phetchabun', 'active' => 1, 'slug' => 'phetchabun'],
            ['id' => 463155, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Phichit', 'active' => 1, 'slug' => 'phichit'],
            ['id' => 463156, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Phitsanulok', 'active' => 1, 'slug' => 'phitsanulok'],
            ['id' => 463157, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Samut Prakan', 'active' => 1, 'slug' => 'samut-prakan'],
            ['id' => 463158, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Samut Sakhon', 'active' => 1, 'slug' => 'samut-sakhon'],
            ['id' => 463159, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Samut Songkhram', 'active' => 1, 'slug' => 'samut-songkhram'],
            ['id' => 463160, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Saraburi', 'active' => 1, 'slug' => 'saraburi'],
            ['id' => 463161, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Singburi', 'active' => 1, 'slug' => 'singburi'],
            ['id' => 463162, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Sukhothai', 'active' => 1, 'slug' => 'sukhothai'],
            ['id' => 463163, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Suphanburi', 'active' => 1, 'slug' => 'suphanburi'],
            ['id' => 463164, 'region_id' => 782702, 'country_code' => 'TH', 'name' => 'Uthai Thani', 'active' => 1, 'slug' => 'uthai-thani'],
            ['id' => 463165, 'region_id' => 782703, 'country_code' => 'TH', 'name' => 'Chachoengsao', 'active' => 1, 'slug' => 'chachoengsao'],
            ['id' => 463166, 'region_id' => 782703, 'country_code' => 'TH', 'name' => 'Trat', 'active' => 1, 'slug' => 'trat'],
            ['id' => 463167, 'region_id' => 782703, 'country_code' => 'TH', 'name' => 'Chanthaburi', 'active' => 1, 'slug' => 'chanthaburi'],
            ['id' => 463168, 'region_id' => 782703, 'country_code' => 'TH', 'name' => 'Chonburi', 'active' => 1, 'slug' => 'chonburi'],
            ['id' => 463169, 'region_id' => 782703, 'country_code' => 'TH', 'name' => 'Pattaya', 'active' => 1, 'slug' => 'pattaya'],
            ['id' => 463170, 'region_id' => 782703, 'country_code' => 'TH', 'name' => 'Prachinburi', 'active' => 1, 'slug' => 'prachinburi'],
            ['id' => 463171, 'region_id' => 782703, 'country_code' => 'TH', 'name' => 'Rayong', 'active' => 1, 'slug' => 'rayong'],
            ['id' => 463172, 'region_id' => 782703, 'country_code' => 'TH', 'name' => 'Sa Kaeo', 'active' => 1, 'slug' => 'sa-kaeo'],
            ['id' => 463173, 'region_id' => 782704, 'country_code' => 'TH', 'name' => 'Chiang Mai', 'active' => 1, 'slug' => 'chiang-mai'],
            ['id' => 463174, 'region_id' => 782704, 'country_code' => 'TH', 'name' => 'Chiang Rai', 'active' => 1, 'slug' => 'chiang-rai'],
            ['id' => 463175, 'region_id' => 782704, 'country_code' => 'TH', 'name' => 'Lampang', 'active' => 1, 'slug' => 'lampang'],
            ['id' => 463176, 'region_id' => 782704, 'country_code' => 'TH', 'name' => 'Lamphun', 'active' => 1, 'slug' => 'lamphun'],
            ['id' => 463177, 'region_id' => 782704, 'country_code' => 'TH', 'name' => 'Mae Hong Son', 'active' => 1, 'slug' => 'mae-hong-son'],
            ['id' => 463178, 'region_id' => 782704, 'country_code' => 'TH', 'name' => 'Nan', 'active' => 1, 'slug' => 'nan'],
            ['id' => 463179, 'region_id' => 782704, 'country_code' => 'TH', 'name' => 'Phayao', 'active' => 1, 'slug' => 'phayao'],
            ['id' => 463180, 'region_id' => 782704, 'country_code' => 'TH', 'name' => 'Phrae', 'active' => 1, 'slug' => 'phrae'],
            ['id' => 463181, 'region_id' => 782704, 'country_code' => 'TH', 'name' => 'Uttaradit', 'active' => 1, 'slug' => 'uttaradit'],
            ['id' => 463182, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Amnat Charoen', 'active' => 1, 'slug' => 'amnat-charoen'],
            ['id' => 463183, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Bueng Kan', 'active' => 1, 'slug' => 'bueng-kan'],
            ['id' => 463184, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Buri Ram', 'active' => 1, 'slug' => 'buri-ram'],
            ['id' => 463185, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Chaiyaphum', 'active' => 1, 'slug' => 'chaiyaphum'],
            ['id' => 463186, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Kalasin', 'active' => 1, 'slug' => 'kalasin'],
            ['id' => 463187, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Khon Kaen', 'active' => 1, 'slug' => 'khon-kaen'],
            ['id' => 463188, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Loei', 'active' => 1, 'slug' => 'loei'],
            ['id' => 463189, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Maha Sarakham', 'active' => 1, 'slug' => 'maha-sarakham'],
            ['id' => 463190, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Mukdahan', 'active' => 1, 'slug' => 'mukdahan'],
            ['id' => 463191, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Nakhon Phanom', 'active' => 1, 'slug' => 'nakhon-phanom'],
            ['id' => 463192, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Nakhon Ratchasima', 'active' => 1, 'slug' => 'nakhon-ratchasima'],
            ['id' => 463193, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Nong Khai', 'active' => 1, 'slug' => 'nong-khai'],
            ['id' => 463194, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Nongbua Lamphu', 'active' => 1, 'slug' => 'nongbua-lamphu'],
            ['id' => 463195, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Roi Et', 'active' => 1, 'slug' => 'roi-et'],
            ['id' => 463196, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Sakon Nakhon', 'active' => 1, 'slug' => 'sakon-nakhon'],
            ['id' => 463197, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Sisaket', 'active' => 1, 'slug' => 'sisaket'],
            ['id' => 463198, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Surin', 'active' => 1, 'slug' => 'surin'],
            ['id' => 463199, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Ubon Ratchathani', 'active' => 1, 'slug' => 'ubon-ratchathani'],
            ['id' => 463200, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Udon Thani', 'active' => 1, 'slug' => 'udon-thani'],
            ['id' => 463201, 'region_id' => 782705, 'country_code' => 'TH', 'name' => 'Yasothon', 'active' => 1, 'slug' => 'yasothon'],
            ['id' => 463202, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Chumphon', 'active' => 1, 'slug' => 'chumphon'],
            ['id' => 463203, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Krabi', 'active' => 1, 'slug' => 'krabi'],
            ['id' => 463204, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Nakhon Si Thammarat', 'active' => 1, 'slug' => 'nakhon-si-thammarat'],
            ['id' => 463205, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Narathiwat', 'active' => 1, 'slug' => 'narathiwat'],
            ['id' => 463206, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Pattani', 'active' => 1, 'slug' => 'pattani'],
            ['id' => 463207, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Phang Nga', 'active' => 1, 'slug' => 'phang-nga'],
            ['id' => 463208, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Phatthalung', 'active' => 1, 'slug' => 'phatthalung'],
            ['id' => 463209, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Phuket', 'active' => 1, 'slug' => 'phuket'],
            ['id' => 463210, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Ranong', 'active' => 1, 'slug' => 'ranong'],
            ['id' => 463211, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Satun', 'active' => 1, 'slug' => 'satun'],
            ['id' => 463212, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Songkhla', 'active' => 1, 'slug' => 'songkhla'],
            ['id' => 463213, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Surat Thani', 'active' => 1, 'slug' => 'surat-thani'],
            ['id' => 463214, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Trang', 'active' => 1, 'slug' => 'trang'],
            ['id' => 463215, 'region_id' => 782706, 'country_code' => 'TH', 'name' => 'Yala', 'active' => 1, 'slug' => 'yala'],
            ['id' => 463216, 'region_id' => 782707, 'country_code' => 'TH', 'name' => 'Hua Hin', 'active' => 1, 'slug' => 'hua-hin'],
            ['id' => 463217, 'region_id' => 782707, 'country_code' => 'TH', 'name' => 'Kanchanaburi', 'active' => 1, 'slug' => 'kanchanaburi'],
            ['id' => 463218, 'region_id' => 782707, 'country_code' => 'TH', 'name' => 'Phetchaburi', 'active' => 1, 'slug' => 'phetchaburi'],
            ['id' => 463219, 'region_id' => 782707, 'country_code' => 'TH', 'name' => 'Prachuap Khiri Khan', 'active' => 1, 'slug' => 'prachuap-khiri-khan'],
            ['id' => 463220, 'region_id' => 782707, 'country_code' => 'TH', 'name' => 'Ratchaburi', 'active' => 1, 'slug' => 'ratchaburi'],
            ['id' => 463221, 'region_id' => 782707, 'country_code' => 'TH', 'name' => 'Tak', 'active' => 1, 'slug' => 'tak']
    	];
    }
}
