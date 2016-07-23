<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class AntiguaandBarbudaSeeder extends Seeder
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
    	return ['code' => 'AG', 'name' => 'Antigua and Barbuda', 'slug' => 'antigua-and-barbuda'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 778513, 'country_code' => 'AG', 'name' => 'Bermuda', 'active' => 1, 'slug' => 'bermuda'],
            ['id' => 778517, 'country_code' => 'AG', 'name' => 'Saint George', 'active' => 1, 'slug' => 'saint-george'],
            ['id' => 778530, 'country_code' => 'AG', 'name' => 'Saint John', 'active' => 1, 'slug' => 'saint-john'],
            ['id' => 778557, 'country_code' => 'AG', 'name' => 'Saint Mary', 'active' => 1, 'slug' => 'saint-mary'],
            ['id' => 778576, 'country_code' => 'AG', 'name' => 'Saint Paul', 'active' => 1, 'slug' => 'saint-paul'],
            ['id' => 778597, 'country_code' => 'AG', 'name' => 'Saint Peter', 'active' => 1, 'slug' => 'saint-peter'],
            ['id' => 778612, 'country_code' => 'AG', 'name' => 'Saint Philip', 'active' => 1, 'slug' => 'saint-philip']
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
            ['id' => 42407, 'region_id' => 778513, 'country_code' => 'AG', 'name' => 'Codrington', 'active' => 1, 'slug' => 'codrington'],
            ['id' => 42408, 'region_id' => 778513, 'country_code' => 'AG', 'name' => 'Dulcina', 'active' => 1, 'slug' => 'dulcina'],
            ['id' => 42409, 'region_id' => 778513, 'country_code' => 'AG', 'name' => 'The Caves', 'active' => 1, 'slug' => 'the-caves'],
            ['id' => 42410, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'Barnes Hill', 'active' => 1, 'slug' => 'barnes-hill'],
            ['id' => 42411, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'Carlisle', 'active' => 1, 'slug' => 'carlisle'],
            ['id' => 42412, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'Cassada Gardens', 'active' => 1, 'slug' => 'cassada-gardens'],
            ['id' => 42413, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'Fitches Creek', 'active' => 1, 'slug' => 'fitches-creek'],
            ['id' => 42414, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'Gunthorpes', 'active' => 1, 'slug' => 'gunthorpes'],
            ['id' => 42415, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'Long Island', 'active' => 1, 'slug' => 'long-island'],
            ['id' => 42416, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'New Winthorpes', 'active' => 1, 'slug' => 'new-winthorpes'],
            ['id' => 42417, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'Osbourn', 'active' => 1, 'slug' => 'osbourn'],
            ['id' => 42418, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'Paynters', 'active' => 1, 'slug' => 'paynters'],
            ['id' => 42419, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'Pigotts', 'active' => 1, 'slug' => 'pigotts'],
            ['id' => 42420, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'Sea View Farm', 'active' => 1, 'slug' => 'sea-view-farm'],
            ['id' => 42421, 'region_id' => 778517, 'country_code' => 'AG', 'name' => 'The Grove', 'active' => 1, 'slug' => 'the-grove'],
            ['id' => 42422, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Aberdeen', 'active' => 1, 'slug' => 'aberdeen'],
            ['id' => 42423, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Belmont', 'active' => 1, 'slug' => 'belmont'],
            ['id' => 42424, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Bendals', 'active' => 1, 'slug' => 'bendals'],
            ['id' => 42425, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Boon House', 'active' => 1, 'slug' => 'boon-house'],
            ['id' => 42426, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Branns Hamlet', 'active' => 1, 'slug' => 'branns-hamlet'],
            ['id' => 42427, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Buckleys', 'active' => 1, 'slug' => 'buckleys'],
            ['id' => 42428, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Cedar Grove', 'active' => 1, 'slug' => 'cedar-grove'],
            ['id' => 42429, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Cedar Valley Mill', 'active' => 1, 'slug' => 'cedar-valley-mill'],
            ['id' => 42430, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Clare Hall', 'active' => 1, 'slug' => 'clare-hall'],
            ['id' => 42431, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Creekside', 'active' => 1, 'slug' => 'creekside'],
            ['id' => 42432, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Crosbies', 'active' => 1, 'slug' => 'crosbies'],
            ['id' => 42433, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Emanuel', 'active' => 1, 'slug' => 'emanuel'],
            ['id' => 42434, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Five Islands Village', 'active' => 1, 'slug' => 'five-islands-village'],
            ['id' => 42435, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Gambles', 'active' => 1, 'slug' => 'gambles'],
            ['id' => 42436, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Golden Grove', 'active' => 1, 'slug' => 'golden-grove'],
            ['id' => 42437, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Grays Hill', 'active' => 1, 'slug' => 'grays-hill'],
            ['id' => 42438, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Green Bay', 'active' => 1, 'slug' => 'green-bay'],
            ['id' => 42439, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Hamiltons', 'active' => 1, 'slug' => 'hamiltons'],
            ['id' => 42440, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Herberts', 'active' => 1, 'slug' => 'herberts'],
            ['id' => 42441, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Potters Village', 'active' => 1, 'slug' => 'potters-village'],
            ['id' => 42442, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Renfrew', 'active' => 1, 'slug' => 'renfrew'],
            ['id' => 42443, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Saint Johnston Village', 'active' => 1, 'slug' => 'saint-johnston-village'],
            ['id' => 42444, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Saint Lukes', 'active' => 1, 'slug' => 'saint-lukes'],
            ['id' => 42445, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Tomlinson', 'active' => 1, 'slug' => 'tomlinson'],
            ['id' => 42446, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Weatherills', 'active' => 1, 'slug' => 'weatherills'],
            ['id' => 42447, 'region_id' => 778530, 'country_code' => 'AG', 'name' => 'Woods', 'active' => 1, 'slug' => 'woods'],
            ['id' => 42448, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Bishops', 'active' => 1, 'slug' => 'bishops'],
            ['id' => 42449, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Blubber Valley', 'active' => 1, 'slug' => 'blubber-valley'],
            ['id' => 42450, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Bolans', 'active' => 1, 'slug' => 'bolans'],
            ['id' => 42451, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Cades Bay', 'active' => 1, 'slug' => 'cades-bay'],
            ['id' => 42452, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Cedar Hall', 'active' => 1, 'slug' => 'cedar-hall'],
            ['id' => 42453, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Claremont', 'active' => 1, 'slug' => 'claremont'],
            ['id' => 42454, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Crab Hill', 'active' => 1, 'slug' => 'crab-hill'],
            ['id' => 42455, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Ebenezer', 'active' => 1, 'slug' => 'ebenezer'],
            ['id' => 42456, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Harveys', 'active' => 1, 'slug' => 'harveys'],
            ['id' => 42457, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'John Hughes', 'active' => 1, 'slug' => 'john-hughes'],
            ['id' => 42458, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Johnsons Point', 'active' => 1, 'slug' => 'johnsons-point'],
            ['id' => 42459, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'New Division', 'active' => 1, 'slug' => 'new-division'],
            ['id' => 42460, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Old Road', 'active' => 1, 'slug' => 'old-road'],
            ['id' => 42461, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Orange Valley Mill', 'active' => 1, 'slug' => 'orange-valley-mill'],
            ['id' => 42462, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Sawcolts', 'active' => 1, 'slug' => 'sawcolts'],
            ['id' => 42463, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Seaforths', 'active' => 1, 'slug' => 'seaforths'],
            ['id' => 42464, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Urlings', 'active' => 1, 'slug' => 'urlings'],
            ['id' => 42465, 'region_id' => 778557, 'country_code' => 'AG', 'name' => 'Yorks', 'active' => 1, 'slug' => 'yorks'],
            ['id' => 42466, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Bats Cave', 'active' => 1, 'slug' => 'bats-cave'],
            ['id' => 42467, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Bethesda', 'active' => 1, 'slug' => 'bethesda'],
            ['id' => 42468, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Blakes', 'active' => 1, 'slug' => 'blakes'],
            ['id' => 42469, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Burkes', 'active' => 1, 'slug' => 'burkes'],
            ['id' => 42470, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Christian Hill', 'active' => 1, 'slug' => 'christian-hill'],
            ['id' => 42471, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Clarence House', 'active' => 1, 'slug' => 'clarence-house'],
            ['id' => 42472, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Cobbs Cross', 'active' => 1, 'slug' => 'cobbs-cross'],
            ['id' => 42473, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Delaps', 'active' => 1, 'slug' => 'delaps'],
            ['id' => 42474, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Doigs', 'active' => 1, 'slug' => 'doigs'],
            ['id' => 42475, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'English Harbour Town', 'active' => 1, 'slug' => 'english-harbour-town'],
            ['id' => 42476, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Falmouth', 'active' => 1, 'slug' => 'falmouth'],
            ['id' => 42477, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Liberta', 'active' => 1, 'slug' => 'liberta'],
            ['id' => 42478, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Matthews', 'active' => 1, 'slug' => 'matthews'],
            ['id' => 42479, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Morris Loobys', 'active' => 1, 'slug' => 'morris-loobys'],
            ['id' => 42480, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Mount William', 'active' => 1, 'slug' => 'mount-william'],
            ['id' => 42481, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Pattersons', 'active' => 1, 'slug' => 'pattersons'],
            ['id' => 42482, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Pattersons Dwelling House', 'active' => 1, 'slug' => 'pattersons-dwelling-house'],
            ['id' => 42483, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Swetes', 'active' => 1, 'slug' => 'swetes'],
            ['id' => 42484, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Table Hill Gordon', 'active' => 1, 'slug' => 'table-hill-gordon'],
            ['id' => 42485, 'region_id' => 778576, 'country_code' => 'AG', 'name' => 'Willis Freemans', 'active' => 1, 'slug' => 'willis-freemans'],
            ['id' => 42486, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Betty´s hope', 'active' => 1, 'slug' => 'bettys-hope'],
            ['id' => 42487, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Big Duers', 'active' => 1, 'slug' => 'big-duers'],
            ['id' => 42488, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Cochranes', 'active' => 1, 'slug' => 'cochranes'],
            ['id' => 42489, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Coconut Hall', 'active' => 1, 'slug' => 'coconut-hall'],
            ['id' => 42490, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Freemans', 'active' => 1, 'slug' => 'freemans'],
            ['id' => 42491, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Gilberts', 'active' => 1, 'slug' => 'gilberts'],
            ['id' => 42492, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Little Duers', 'active' => 1, 'slug' => 'little-duers'],
            ['id' => 42493, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Mercers Creek', 'active' => 1, 'slug' => 'mercers-creek'],
            ['id' => 42494, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Pares', 'active' => 1, 'slug' => 'pares'],
            ['id' => 42495, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Parham', 'active' => 1, 'slug' => 'parham'],
            ['id' => 42496, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Parrys', 'active' => 1, 'slug' => 'parrys'],
            ['id' => 42497, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'The Diamond', 'active' => 1, 'slug' => 'the-diamond'],
            ['id' => 42498, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'The Garden', 'active' => 1, 'slug' => 'the-garden'],
            ['id' => 42499, 'region_id' => 778597, 'country_code' => 'AG', 'name' => 'Vernons', 'active' => 1, 'slug' => 'vernons'],
            ['id' => 42500, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Collins', 'active' => 1, 'slug' => 'collins'],
            ['id' => 42501, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Comfort Hall', 'active' => 1, 'slug' => 'comfort-hall'],
            ['id' => 42502, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Ffryes', 'active' => 1, 'slug' => 'ffryes'],
            ['id' => 42503, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Freetown', 'active' => 1, 'slug' => 'freetown'],
            ['id' => 42504, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Gaynors', 'active' => 1, 'slug' => 'gaynors'],
            ['id' => 42505, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Glanvilles', 'active' => 1, 'slug' => 'glanvilles'],
            ['id' => 42506, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Grants', 'active' => 1, 'slug' => 'grants'],
            ['id' => 42507, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Grays', 'active' => 1, 'slug' => 'grays'],
            ['id' => 42508, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Jennings', 'active' => 1, 'slug' => 'jennings'],
            ['id' => 42509, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Lavingtons', 'active' => 1, 'slug' => 'lavingtons'],
            ['id' => 42510, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Long Lane', 'active' => 1, 'slug' => 'long-lane'],
            ['id' => 42511, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Lower Lyons', 'active' => 1, 'slug' => 'lower-lyons'],
            ['id' => 42512, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Lyons', 'active' => 1, 'slug' => 'lyons'],
            ['id' => 42513, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Mayers', 'active' => 1, 'slug' => 'mayers'],
            ['id' => 42514, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Mill Reef Club', 'active' => 1, 'slug' => 'mill-reef-club'],
            ['id' => 42515, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Montpelier', 'active' => 1, 'slug' => 'montpelier'],
            ['id' => 42516, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Newfield', 'active' => 1, 'slug' => 'newfield'],
            ['id' => 42517, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Saint Philips', 'active' => 1, 'slug' => 'saint-philips'],
            ['id' => 42518, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Seatons', 'active' => 1, 'slug' => 'seatons'],
            ['id' => 42519, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Sign', 'active' => 1, 'slug' => 'sign'],
            ['id' => 42520, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Spencers', 'active' => 1, 'slug' => 'spencers'],
            ['id' => 42521, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'The Brook', 'active' => 1, 'slug' => 'the-brook'],
            ['id' => 42522, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Watsons', 'active' => 1, 'slug' => 'watsons'],
            ['id' => 42523, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Willikies', 'active' => 1, 'slug' => 'willikies'],
            ['id' => 42524, 'region_id' => 778612, 'country_code' => 'AG', 'name' => 'Willoughby', 'active' => 1, 'slug' => 'willoughby']
    	];
    }
}
