<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class EstoniaSeeder extends Seeder
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

        if ($this->cities() > 4000) {
            foreach (array_chunk($this->cities(), 3500) as $chunk) {
                City::insert($chunk);
            }
        } else {
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
        return ['code' => 'EE', 'name' => 'Estonia', 'slug' => 'estonia'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
        return [
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Tallinn', 'active' => 1, 'slug' => 'tallinn'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Tartu', 'active' => 1, 'slug' => 'tartu'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Narva', 'active' => 1, 'slug' => 'narva'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Pärnu', 'active' => 1, 'slug' => 'parnu'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Kohtla-Järve', 'active' => 1, 'slug' => 'kohtla-jarve'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Viljandi', 'active' => 1, 'slug' => 'viljandi'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Rakvere', 'active' => 1, 'slug' => 'rakvere'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Maardu', 'active' => 1, 'slug' => 'maardu'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Sillamäe', 'active' => 1, 'slug' => 'sillamae'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Kuressaare', 'active' => 1, 'slug' => 'kuressaare'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Võru', 'active' => 1, 'slug' => 'voru'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Valga', 'active' => 1, 'slug' => 'valga'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Haapsalu', 'active' => 1, 'slug' => 'haapsalu'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Jõhvi', 'active' => 1, 'slug' => 'johvi'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Paide', 'active' => 1, 'slug' => 'paide'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Keila', 'active' => 1, 'slug' => 'keila'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Kiviõli', 'active' => 1, 'slug' => 'kivioli'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Tapa', 'active' => 1, 'slug' => 'tapa'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Põlva', 'active' => 1, 'slug' => 'polva'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Jõgeva', 'active' => 1, 'slug' => 'jogeva'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Türi', 'active' => 1, 'slug' => 'turi'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Elva', 'active' => 1, 'slug' => 'elva'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Rapla', 'active' => 1, 'slug' => 'rapla'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Saue', 'active' => 1, 'slug' => 'saue'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Põltsamaa', 'active' => 1, 'slug' => 'poltsamaa'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Paldiski', 'active' => 1, 'slug' => 'paldiski'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Sindi', 'active' => 1, 'slug' => 'sindi'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Kunda', 'active' => 1, 'slug' => 'kunda'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Kärdla', 'active' => 1, 'slug' => 'kardla'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Loksa', 'active' => 1, 'slug' => 'loksa'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Tõrva', 'active' => 1, 'slug' => 'torva'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Kehra', 'active' => 1, 'slug' => 'kehra'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Räpina', 'active' => 1, 'slug' => 'rapina'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Narva-Jõesuu', 'active' => 1, 'slug' => 'narva-joesuu'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Tamsalu', 'active' => 1, 'slug' => 'tamsalu'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Kilingi-Nõmme', 'active' => 1, 'slug' => 'kilingi-nomme'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Otepää', 'active' => 1, 'slug' => 'otepaa'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Karksi-Nuia', 'active' => 1, 'slug' => 'karksi-nuia'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Püssi', 'active' => 1, 'slug' => 'pussi'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Mustvee', 'active' => 1, 'slug' => 'mustvee'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Võhma', 'active' => 1, 'slug' => 'vohma'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Lihula', 'active' => 1, 'slug' => 'lihula'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Antsla', 'active' => 1, 'slug' => 'antsla'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Abja-Paluoja', 'active' => 1, 'slug' => 'abja-paluoja'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Suure-Jaani', 'active' => 1, 'slug' => 'suure-jaani'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Kallaste', 'active' => 1, 'slug' => 'kallaste'],
            ['id' => 0, 'country_code' => 'EE', 'name' => 'Mõisaküla', 'active' => 1, 'slug' => 'moisakula'],
        ];
    }

    /**
     * Get region cities.
     *
     * @return array
     */
    public function cities()
    {
        return [];
    }
}
