<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class LuxembourgSeeder extends Seeder
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
    	return ['code' => 'LU', 'name' => 'Luxembourg', 'slug' => 'luxembourg'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 743438, 'country_code' => 'LU', 'name' => 'Clervaux', 'active' => 1, 'slug' => 'clervaux'],
            ['id' => 743447, 'country_code' => 'LU', 'name' => 'Diekirch', 'active' => 1, 'slug' => 'diekirch'],
            ['id' => 743460, 'country_code' => 'LU', 'name' => 'Redange', 'active' => 1, 'slug' => 'redange'],
            ['id' => 743490, 'country_code' => 'LU', 'name' => 'Vianden', 'active' => 1, 'slug' => 'vianden'],
            ['id' => 743503, 'country_code' => 'LU', 'name' => 'Wiltz', 'active' => 1, 'slug' => 'wiltz'],
            ['id' => 743536, 'country_code' => 'LU', 'name' => 'Echternach', 'active' => 1, 'slug' => 'echternach'],
            ['id' => 743545, 'country_code' => 'LU', 'name' => 'Grevenmacher', 'active' => 1, 'slug' => 'grevenmacher'],
            ['id' => 743578, 'country_code' => 'LU', 'name' => 'Remich', 'active' => 1, 'slug' => 'remich'],
            ['id' => 743606, 'country_code' => 'LU', 'name' => 'Capellen', 'active' => 1, 'slug' => 'capellen'],
            ['id' => 743618, 'country_code' => 'LU', 'name' => 'Esch-sur-Alzette', 'active' => 1, 'slug' => 'esch-sur-alzette'],
            ['id' => 743651, 'country_code' => 'LU', 'name' => 'Luxemburgo', 'active' => 1, 'slug' => 'luxemburgo'],
            ['id' => 743663, 'country_code' => 'LU', 'name' => 'Mersch', 'active' => 1, 'slug' => 'mersch']
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
            ['id' => 37483, 'region_id' => 743438, 'country_code' => 'LU', 'name' => 'Clervaux', 'active' => 1, 'slug' => 'clervaux'],
            ['id' => 37484, 'region_id' => 743438, 'country_code' => 'LU', 'name' => 'Consthum', 'active' => 1, 'slug' => 'consthum'],
            ['id' => 37485, 'region_id' => 743438, 'country_code' => 'LU', 'name' => 'Heinerscheid', 'active' => 1, 'slug' => 'heinerscheid'],
            ['id' => 37486, 'region_id' => 743438, 'country_code' => 'LU', 'name' => 'Hosingen', 'active' => 1, 'slug' => 'hosingen'],
            ['id' => 37487, 'region_id' => 743438, 'country_code' => 'LU', 'name' => 'Munshausen', 'active' => 1, 'slug' => 'munshausen'],
            ['id' => 37488, 'region_id' => 743438, 'country_code' => 'LU', 'name' => 'Troisvierges', 'active' => 1, 'slug' => 'troisvierges'],
            ['id' => 37489, 'region_id' => 743438, 'country_code' => 'LU', 'name' => 'Weiswampach', 'active' => 1, 'slug' => 'weiswampach'],
            ['id' => 37490, 'region_id' => 743438, 'country_code' => 'LU', 'name' => 'Wincrange', 'active' => 1, 'slug' => 'wincrange'],
            ['id' => 37491, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Bettendorf', 'active' => 1, 'slug' => 'bettendorf'],
            ['id' => 37492, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Bourscheid', 'active' => 1, 'slug' => 'bourscheid'],
            ['id' => 37493, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Diekirch', 'active' => 1, 'slug' => 'diekirch'],
            ['id' => 37494, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Ermsdorf', 'active' => 1, 'slug' => 'ermsdorf'],
            ['id' => 37495, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Erpeldange', 'active' => 1, 'slug' => 'erpeldange'],
            ['id' => 37496, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Ettelbruck', 'active' => 1, 'slug' => 'ettelbruck'],
            ['id' => 37497, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Feulen', 'active' => 1, 'slug' => 'feulen'],
            ['id' => 37498, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Hoscheid', 'active' => 1, 'slug' => 'hoscheid'],
            ['id' => 37499, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Medernach', 'active' => 1, 'slug' => 'medernach'],
            ['id' => 37500, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Mertzig', 'active' => 1, 'slug' => 'mertzig'],
            ['id' => 37501, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Reisdorf', 'active' => 1, 'slug' => 'reisdorf'],
            ['id' => 37502, 'region_id' => 743447, 'country_code' => 'LU', 'name' => 'Schieren', 'active' => 1, 'slug' => 'schieren'],
            ['id' => 37503, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Arsdorf', 'active' => 1, 'slug' => 'arsdorf'],
            ['id' => 37504, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Beckerich', 'active' => 1, 'slug' => 'beckerich'],
            ['id' => 37505, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Bettborn', 'active' => 1, 'slug' => 'bettborn'],
            ['id' => 37506, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Bigonville', 'active' => 1, 'slug' => 'bigonville'],
            ['id' => 37507, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Ell', 'active' => 1, 'slug' => 'ell'],
            ['id' => 37508, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Everlange', 'active' => 1, 'slug' => 'everlange'],
            ['id' => 37509, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Folschette', 'active' => 1, 'slug' => 'folschette'],
            ['id' => 37510, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Grevels', 'active' => 1, 'slug' => 'grevels'],
            ['id' => 37511, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Grosbous', 'active' => 1, 'slug' => 'grosbous'],
            ['id' => 37512, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Holtz', 'active' => 1, 'slug' => 'holtz'],
            ['id' => 37513, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Hostert', 'active' => 1, 'slug' => 'hostert'],
            ['id' => 37514, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Hovelange', 'active' => 1, 'slug' => 'hovelange'],
            ['id' => 37515, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Nagem', 'active' => 1, 'slug' => 'nagem'],
            ['id' => 37516, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Niederpallen', 'active' => 1, 'slug' => 'niederpallen'],
            ['id' => 37517, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Noerdange', 'active' => 1, 'slug' => 'noerdange'],
            ['id' => 37518, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Oberpallen', 'active' => 1, 'slug' => 'oberpallen'],
            ['id' => 37519, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Ospern', 'active' => 1, 'slug' => 'ospern'],
            ['id' => 37520, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Perlé', 'active' => 1, 'slug' => 'perle'],
            ['id' => 37521, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Platen', 'active' => 1, 'slug' => 'platen'],
            ['id' => 37522, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Pratz', 'active' => 1, 'slug' => 'pratz'],
            ['id' => 37523, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Rambrouch', 'active' => 1, 'slug' => 'rambrouch'],
            ['id' => 37524, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Redange', 'active' => 1, 'slug' => 'redange'],
            ['id' => 37525, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Reimberg', 'active' => 1, 'slug' => 'reimberg'],
            ['id' => 37526, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Rombach', 'active' => 1, 'slug' => 'rombach'],
            ['id' => 37527, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Roodt', 'active' => 1, 'slug' => 'roodt'],
            ['id' => 37528, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Saeul', 'active' => 1, 'slug' => 'saeul'],
            ['id' => 37529, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Schandel', 'active' => 1, 'slug' => 'schandel'],
            ['id' => 37530, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Schweich', 'active' => 1, 'slug' => 'schweich'],
            ['id' => 37531, 'region_id' => 743460, 'country_code' => 'LU', 'name' => 'Useldange', 'active' => 1, 'slug' => 'useldange'],
            ['id' => 37532, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Bettel', 'active' => 1, 'slug' => 'bettel'],
            ['id' => 37533, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Bivels', 'active' => 1, 'slug' => 'bivels'],
            ['id' => 37534, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Fouhren', 'active' => 1, 'slug' => 'fouhren'],
            ['id' => 37535, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Gralingen', 'active' => 1, 'slug' => 'gralingen'],
            ['id' => 37536, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Longsdorf', 'active' => 1, 'slug' => 'longsdorf'],
            ['id' => 37537, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Merscheid', 'active' => 1, 'slug' => 'merscheid'],
            ['id' => 37538, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Nachtmanderscheid', 'active' => 1, 'slug' => 'nachtmanderscheid'],
            ['id' => 37539, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Putscheid', 'active' => 1, 'slug' => 'putscheid'],
            ['id' => 37540, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Stolzembourg', 'active' => 1, 'slug' => 'stolzembourg'],
            ['id' => 37541, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Vianden', 'active' => 1, 'slug' => 'vianden'],
            ['id' => 37542, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Walsdorf', 'active' => 1, 'slug' => 'walsdorf'],
            ['id' => 37543, 'region_id' => 743490, 'country_code' => 'LU', 'name' => 'Weiler', 'active' => 1, 'slug' => 'weiler'],
            ['id' => 37544, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Baschleiden', 'active' => 1, 'slug' => 'baschleiden'],
            ['id' => 37545, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Bavigne', 'active' => 1, 'slug' => 'bavigne'],
            ['id' => 37546, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Berlé', 'active' => 1, 'slug' => 'berle'],
            ['id' => 37547, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Boulaide', 'active' => 1, 'slug' => 'boulaide'],
            ['id' => 37548, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Büderscheid', 'active' => 1, 'slug' => 'buderscheid'],
            ['id' => 37549, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Dahl', 'active' => 1, 'slug' => 'dahl'],
            ['id' => 37550, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Doncols', 'active' => 1, 'slug' => 'doncols'],
            ['id' => 37551, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Enscherange', 'active' => 1, 'slug' => 'enscherange'],
            ['id' => 37552, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Erpeldange', 'active' => 1, 'slug' => 'erpeldange'],
            ['id' => 37553, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Eschdorf', 'active' => 1, 'slug' => 'eschdorf'],
            ['id' => 37554, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Esch-sur-Sûre', 'active' => 1, 'slug' => 'esch-sur-sure'],
            ['id' => 37555, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Eschweiler', 'active' => 1, 'slug' => 'eschweiler'],
            ['id' => 37556, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Goesdorf', 'active' => 1, 'slug' => 'goesdorf'],
            ['id' => 37557, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Harlange', 'active' => 1, 'slug' => 'harlange'],
            ['id' => 37558, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Heiderscheid', 'active' => 1, 'slug' => 'heiderscheid'],
            ['id' => 37559, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Insenborn', 'active' => 1, 'slug' => 'insenborn'],
            ['id' => 37560, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Kaundorf', 'active' => 1, 'slug' => 'kaundorf'],
            ['id' => 37561, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Kautenbach', 'active' => 1, 'slug' => 'kautenbach'],
            ['id' => 37562, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Knaphoscheid', 'active' => 1, 'slug' => 'knaphoscheid'],
            ['id' => 37563, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Merckholtz', 'active' => 1, 'slug' => 'merckholtz'],
            ['id' => 37564, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Merscheid', 'active' => 1, 'slug' => 'merscheid'],
            ['id' => 37565, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Nocher', 'active' => 1, 'slug' => 'nocher'],
            ['id' => 37566, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Nocher-Route', 'active' => 1, 'slug' => 'nocher-route'],
            ['id' => 37567, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Noertrange', 'active' => 1, 'slug' => 'noertrange'],
            ['id' => 37568, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Nothum', 'active' => 1, 'slug' => 'nothum'],
            ['id' => 37569, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Pintsch', 'active' => 1, 'slug' => 'pintsch'],
            ['id' => 37570, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Surré', 'active' => 1, 'slug' => 'surre'],
            ['id' => 37571, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Tadler-Ringel-Dirbach', 'active' => 1, 'slug' => 'tadler-ringel-dirbach'],
            ['id' => 37572, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Tarchamps', 'active' => 1, 'slug' => 'tarchamps'],
            ['id' => 37573, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Wiltz', 'active' => 1, 'slug' => 'wiltz'],
            ['id' => 37574, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Wilwerwiltz', 'active' => 1, 'slug' => 'wilwerwiltz'],
            ['id' => 37575, 'region_id' => 743503, 'country_code' => 'LU', 'name' => 'Winseler', 'active' => 1, 'slug' => 'winseler'],
            ['id' => 37576, 'region_id' => 743536, 'country_code' => 'LU', 'name' => 'Beaufort', 'active' => 1, 'slug' => 'beaufort'],
            ['id' => 37577, 'region_id' => 743536, 'country_code' => 'LU', 'name' => 'Bech', 'active' => 1, 'slug' => 'bech'],
            ['id' => 37578, 'region_id' => 743536, 'country_code' => 'LU', 'name' => 'Berdorf', 'active' => 1, 'slug' => 'berdorf'],
            ['id' => 37579, 'region_id' => 743536, 'country_code' => 'LU', 'name' => 'Consdorf', 'active' => 1, 'slug' => 'consdorf'],
            ['id' => 37580, 'region_id' => 743536, 'country_code' => 'LU', 'name' => 'Echternach', 'active' => 1, 'slug' => 'echternach'],
            ['id' => 37581, 'region_id' => 743536, 'country_code' => 'LU', 'name' => 'Mompach', 'active' => 1, 'slug' => 'mompach'],
            ['id' => 37582, 'region_id' => 743536, 'country_code' => 'LU', 'name' => 'Rosport', 'active' => 1, 'slug' => 'rosport'],
            ['id' => 37583, 'region_id' => 743536, 'country_code' => 'LU', 'name' => 'Waldbillig', 'active' => 1, 'slug' => 'waldbillig'],
            ['id' => 37584, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Ahn-Dreiborn', 'active' => 1, 'slug' => 'ahn-dreiborn'],
            ['id' => 37585, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Altlinster', 'active' => 1, 'slug' => 'altlinster'],
            ['id' => 37586, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Beidweiler', 'active' => 1, 'slug' => 'beidweiler'],
            ['id' => 37587, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Berbourg', 'active' => 1, 'slug' => 'berbourg'],
            ['id' => 37588, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Betzdorf', 'active' => 1, 'slug' => 'betzdorf'],
            ['id' => 37589, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Beyren', 'active' => 1, 'slug' => 'beyren'],
            ['id' => 37590, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Biwer', 'active' => 1, 'slug' => 'biwer'],
            ['id' => 37591, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Bourglinster', 'active' => 1, 'slug' => 'bourglinster'],
            ['id' => 37592, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Ehnen', 'active' => 1, 'slug' => 'ehnen'],
            ['id' => 37593, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Eisenborn', 'active' => 1, 'slug' => 'eisenborn'],
            ['id' => 37594, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Eschweiler', 'active' => 1, 'slug' => 'eschweiler'],
            ['id' => 37595, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Flaxweiler', 'active' => 1, 'slug' => 'flaxweiler'],
            ['id' => 37596, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Godbrange', 'active' => 1, 'slug' => 'godbrange'],
            ['id' => 37597, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Gonderange', 'active' => 1, 'slug' => 'gonderange'],
            ['id' => 37598, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Gostingen', 'active' => 1, 'slug' => 'gostingen'],
            ['id' => 37599, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Grevenmacher', 'active' => 1, 'slug' => 'grevenmacher'],
            ['id' => 37600, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Imbringen', 'active' => 1, 'slug' => 'imbringen'],
            ['id' => 37601, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Junglinster', 'active' => 1, 'slug' => 'junglinster'],
            ['id' => 37602, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Lellig', 'active' => 1, 'slug' => 'lellig'],
            ['id' => 37603, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Machtum', 'active' => 1, 'slug' => 'machtum'],
            ['id' => 37604, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Manternach', 'active' => 1, 'slug' => 'manternach'],
            ['id' => 37605, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Mensdorf', 'active' => 1, 'slug' => 'mensdorf'],
            ['id' => 37606, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Mertert', 'active' => 1, 'slug' => 'mertert'],
            ['id' => 37607, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Münschecker', 'active' => 1, 'slug' => 'munschecker'],
            ['id' => 37608, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Niederdonven', 'active' => 1, 'slug' => 'niederdonven'],
            ['id' => 37609, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Oberdonven', 'active' => 1, 'slug' => 'oberdonven'],
            ['id' => 37610, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Olingen', 'active' => 1, 'slug' => 'olingen'],
            ['id' => 37611, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Roodt-sur-Syr', 'active' => 1, 'slug' => 'roodt-sur-syr'],
            ['id' => 37612, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Wasserbillig', 'active' => 1, 'slug' => 'wasserbillig'],
            ['id' => 37613, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Wecker', 'active' => 1, 'slug' => 'wecker'],
            ['id' => 37614, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Wormeldange', 'active' => 1, 'slug' => 'wormeldange'],
            ['id' => 37615, 'region_id' => 743545, 'country_code' => 'LU', 'name' => 'Wormeldange-Haut', 'active' => 1, 'slug' => 'wormeldange-haut'],
            ['id' => 37616, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Altwies', 'active' => 1, 'slug' => 'altwies'],
            ['id' => 37617, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Assel', 'active' => 1, 'slug' => 'assel'],
            ['id' => 37618, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Bech-Kleinmacher', 'active' => 1, 'slug' => 'bech-kleinmacher'],
            ['id' => 37619, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Bous', 'active' => 1, 'slug' => 'bous'],
            ['id' => 37620, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Burmerange', 'active' => 1, 'slug' => 'burmerange'],
            ['id' => 37621, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Canach', 'active' => 1, 'slug' => 'canach'],
            ['id' => 37622, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Dalheim', 'active' => 1, 'slug' => 'dalheim'],
            ['id' => 37623, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Ellange', 'active' => 1, 'slug' => 'ellange'],
            ['id' => 37624, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Elvange', 'active' => 1, 'slug' => 'elvange'],
            ['id' => 37625, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Emerange', 'active' => 1, 'slug' => 'emerange'],
            ['id' => 37626, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Erpeldange', 'active' => 1, 'slug' => 'erpeldange'],
            ['id' => 37627, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Filsdorf', 'active' => 1, 'slug' => 'filsdorf'],
            ['id' => 37628, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Greiveldange', 'active' => 1, 'slug' => 'greiveldange'],
            ['id' => 37629, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Lenningen', 'active' => 1, 'slug' => 'lenningen'],
            ['id' => 37630, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Mondorf-les-Bains', 'active' => 1, 'slug' => 'mondorf-les-bains'],
            ['id' => 37631, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Remerschen', 'active' => 1, 'slug' => 'remerschen'],
            ['id' => 37632, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Remich', 'active' => 1, 'slug' => 'remich'],
            ['id' => 37633, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Rolling', 'active' => 1, 'slug' => 'rolling'],
            ['id' => 37634, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Schengen', 'active' => 1, 'slug' => 'schengen'],
            ['id' => 37635, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Schwebsingen', 'active' => 1, 'slug' => 'schwebsingen'],
            ['id' => 37636, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Stadtbredimus', 'active' => 1, 'slug' => 'stadtbredimus'],
            ['id' => 37637, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Trintange', 'active' => 1, 'slug' => 'trintange'],
            ['id' => 37638, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Trintange-Ersange-Roedt', 'active' => 1, 'slug' => 'trintange-ersange-roedt'],
            ['id' => 37639, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Waldbredimus', 'active' => 1, 'slug' => 'waldbredimus'],
            ['id' => 37640, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Welfrange', 'active' => 1, 'slug' => 'welfrange'],
            ['id' => 37641, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Wellenstein', 'active' => 1, 'slug' => 'wellenstein'],
            ['id' => 37642, 'region_id' => 743578, 'country_code' => 'LU', 'name' => 'Wintrange', 'active' => 1, 'slug' => 'wintrange'],
            ['id' => 37643, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Bascharage', 'active' => 1, 'slug' => 'bascharage'],
            ['id' => 37644, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Clemency', 'active' => 1, 'slug' => 'clemency'],
            ['id' => 37645, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Dippach', 'active' => 1, 'slug' => 'dippach'],
            ['id' => 37646, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Garnich', 'active' => 1, 'slug' => 'garnich'],
            ['id' => 37647, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Hobscheid', 'active' => 1, 'slug' => 'hobscheid'],
            ['id' => 37648, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Kehlen', 'active' => 1, 'slug' => 'kehlen'],
            ['id' => 37649, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Koerich', 'active' => 1, 'slug' => 'koerich'],
            ['id' => 37650, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Kopstal', 'active' => 1, 'slug' => 'kopstal'],
            ['id' => 37651, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Mamer', 'active' => 1, 'slug' => 'mamer'],
            ['id' => 37652, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Septfontaines', 'active' => 1, 'slug' => 'septfontaines'],
            ['id' => 37653, 'region_id' => 743606, 'country_code' => 'LU', 'name' => 'Steinfort', 'active' => 1, 'slug' => 'steinfort'],
            ['id' => 37654, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Aspelt', 'active' => 1, 'slug' => 'aspelt'],
            ['id' => 37655, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Belvaux', 'active' => 1, 'slug' => 'belvaux'],
            ['id' => 37656, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Berchem', 'active' => 1, 'slug' => 'berchem'],
            ['id' => 37657, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Bergem', 'active' => 1, 'slug' => 'bergem'],
            ['id' => 37658, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Bettembourg', 'active' => 1, 'slug' => 'bettembourg'],
            ['id' => 37659, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Bivange', 'active' => 1, 'slug' => 'bivange'],
            ['id' => 37660, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Crauthem', 'active' => 1, 'slug' => 'crauthem'],
            ['id' => 37661, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Differdange', 'active' => 1, 'slug' => 'differdange'],
            ['id' => 37662, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Dudelange', 'active' => 1, 'slug' => 'dudelange'],
            ['id' => 37663, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Ehlerange', 'active' => 1, 'slug' => 'ehlerange'],
            ['id' => 37664, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Esch-Alzette', 'active' => 1, 'slug' => 'esch-alzette'],
            ['id' => 37665, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Fousbann', 'active' => 1, 'slug' => 'fousbann'],
            ['id' => 37666, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Frisange', 'active' => 1, 'slug' => 'frisange'],
            ['id' => 37667, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Hellange', 'active' => 1, 'slug' => 'hellange'],
            ['id' => 37668, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Huncherange', 'active' => 1, 'slug' => 'huncherange'],
            ['id' => 37669, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Kayl', 'active' => 1, 'slug' => 'kayl'],
            ['id' => 37670, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Lamadelaine', 'active' => 1, 'slug' => 'lamadelaine'],
            ['id' => 37671, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Leudelange', 'active' => 1, 'slug' => 'leudelange'],
            ['id' => 37672, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Mondercange', 'active' => 1, 'slug' => 'mondercange'],
            ['id' => 37673, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Niedercorn', 'active' => 1, 'slug' => 'niedercorn'],
            ['id' => 37674, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Noertzange', 'active' => 1, 'slug' => 'noertzange'],
            ['id' => 37675, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Obercorn', 'active' => 1, 'slug' => 'obercorn'],
            ['id' => 37676, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Peppange', 'active' => 1, 'slug' => 'peppange'],
            ['id' => 37677, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Pétange', 'active' => 1, 'slug' => 'petange'],
            ['id' => 37678, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Pontpierre', 'active' => 1, 'slug' => 'pontpierre'],
            ['id' => 37679, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Rodange', 'active' => 1, 'slug' => 'rodange'],
            ['id' => 37680, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Roeser', 'active' => 1, 'slug' => 'roeser'],
            ['id' => 37681, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Rumelange', 'active' => 1, 'slug' => 'rumelange'],
            ['id' => 37682, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Sanem', 'active' => 1, 'slug' => 'sanem'],
            ['id' => 37683, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Schifflange', 'active' => 1, 'slug' => 'schifflange'],
            ['id' => 37684, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Soleuvre', 'active' => 1, 'slug' => 'soleuvre'],
            ['id' => 37685, 'region_id' => 743618, 'country_code' => 'LU', 'name' => 'Tétange', 'active' => 1, 'slug' => 'tetange'],
            ['id' => 37686, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Bertrange', 'active' => 1, 'slug' => 'bertrange'],
            ['id' => 37687, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Contern', 'active' => 1, 'slug' => 'contern'],
            ['id' => 37688, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Hesperange', 'active' => 1, 'slug' => 'hesperange'],
            ['id' => 37689, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Luxemburgo', 'active' => 1, 'slug' => 'luxemburgo'],
            ['id' => 37690, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Niederanven', 'active' => 1, 'slug' => 'niederanven'],
            ['id' => 37691, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Sandweiler', 'active' => 1, 'slug' => 'sandweiler'],
            ['id' => 37692, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Schuttrange', 'active' => 1, 'slug' => 'schuttrange'],
            ['id' => 37693, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Steinsel', 'active' => 1, 'slug' => 'steinsel'],
            ['id' => 37694, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Strassen', 'active' => 1, 'slug' => 'strassen'],
            ['id' => 37695, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Walferdange', 'active' => 1, 'slug' => 'walferdange'],
            ['id' => 37696, 'region_id' => 743651, 'country_code' => 'LU', 'name' => 'Weiler-la-Tour', 'active' => 1, 'slug' => 'weiler-la-tour'],
            ['id' => 37697, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Angelsberg', 'active' => 1, 'slug' => 'angelsberg'],
            ['id' => 37698, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Beringen', 'active' => 1, 'slug' => 'beringen'],
            ['id' => 37699, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Bissen', 'active' => 1, 'slug' => 'bissen'],
            ['id' => 37700, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Blaschette', 'active' => 1, 'slug' => 'blaschette'],
            ['id' => 37701, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Boevange', 'active' => 1, 'slug' => 'boevange'],
            ['id' => 37702, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Bofferdange', 'active' => 1, 'slug' => 'bofferdange'],
            ['id' => 37703, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Brouch', 'active' => 1, 'slug' => 'brouch'],
            ['id' => 37704, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Buschdorf', 'active' => 1, 'slug' => 'buschdorf'],
            ['id' => 37705, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Colmar-Berg', 'active' => 1, 'slug' => 'colmar-berg'],
            ['id' => 37706, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Cruchten', 'active' => 1, 'slug' => 'cruchten'],
            ['id' => 37707, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Ernzen', 'active' => 1, 'slug' => 'ernzen'],
            ['id' => 37708, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Fischbach', 'active' => 1, 'slug' => 'fischbach'],
            ['id' => 37709, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Gosseldange', 'active' => 1, 'slug' => 'gosseldange'],
            ['id' => 37710, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Grevenknapp-Bill-Finsterthal', 'active' => 1, 'slug' => 'grevenknapp-bill-finsterthal'],
            ['id' => 37711, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Heffingen', 'active' => 1, 'slug' => 'heffingen'],
            ['id' => 37712, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Helmdange', 'active' => 1, 'slug' => 'helmdange'],
            ['id' => 37713, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Hollenfels', 'active' => 1, 'slug' => 'hollenfels'],
            ['id' => 37714, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Hünsdorf', 'active' => 1, 'slug' => 'hunsdorf'],
            ['id' => 37715, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Larochette', 'active' => 1, 'slug' => 'larochette'],
            ['id' => 37716, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Lintgen', 'active' => 1, 'slug' => 'lintgen'],
            ['id' => 37717, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Lorentzweiler', 'active' => 1, 'slug' => 'lorentzweiler'],
            ['id' => 37718, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Mersch', 'active' => 1, 'slug' => 'mersch'],
            ['id' => 37719, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Moesdorf', 'active' => 1, 'slug' => 'moesdorf'],
            ['id' => 37720, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Nommern', 'active' => 1, 'slug' => 'nommern'],
            ['id' => 37721, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Pettingen', 'active' => 1, 'slug' => 'pettingen'],
            ['id' => 37722, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Reckange', 'active' => 1, 'slug' => 'reckange'],
            ['id' => 37723, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Reuland', 'active' => 1, 'slug' => 'reuland'],
            ['id' => 37724, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Rollingen', 'active' => 1, 'slug' => 'rollingen'],
            ['id' => 37725, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Schoenfels', 'active' => 1, 'slug' => 'schoenfels'],
            ['id' => 37726, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Schoos', 'active' => 1, 'slug' => 'schoos'],
            ['id' => 37727, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Schrondweiler', 'active' => 1, 'slug' => 'schrondweiler'],
            ['id' => 37728, 'region_id' => 743663, 'country_code' => 'LU', 'name' => 'Tuntange', 'active' => 1, 'slug' => 'tuntange']
    	];
    }
}
