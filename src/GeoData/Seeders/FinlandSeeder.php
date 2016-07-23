<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class FinlandSeeder extends Seeder
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
    	return ['code' => 'FI', 'name' => 'Finland', 'slug' => 'finland'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 742851, 'country_code' => 'FI', 'name' => 'Åland', 'active' => 1, 'slug' => 'aland'],
            ['id' => 742868, 'country_code' => 'FI', 'name' => 'Finlandia Meridional', 'active' => 1, 'slug' => 'finlandia-meridional'],
            ['id' => 742875, 'country_code' => 'FI', 'name' => 'Finlandia Occidental', 'active' => 1, 'slug' => 'finlandia-occidental'],
            ['id' => 742883, 'country_code' => 'FI', 'name' => 'Finlandia Oriental', 'active' => 1, 'slug' => 'finlandia-oriental'],
            ['id' => 742887, 'country_code' => 'FI', 'name' => 'Laponia', 'active' => 1, 'slug' => 'laponia'],
            ['id' => 742892, 'country_code' => 'FI', 'name' => 'Oulu', 'active' => 1, 'slug' => 'oulu']
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
            ['id' => 36925, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Brändö', 'active' => 1, 'slug' => 'brando'],
            ['id' => 36926, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Eckerö', 'active' => 1, 'slug' => 'eckero'],
            ['id' => 36927, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Finström', 'active' => 1, 'slug' => 'finstrom'],
            ['id' => 36928, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Föglö', 'active' => 1, 'slug' => 'foglo'],
            ['id' => 36929, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Geta', 'active' => 1, 'slug' => 'geta'],
            ['id' => 36930, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Hammarland', 'active' => 1, 'slug' => 'hammarland'],
            ['id' => 36931, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Jomala', 'active' => 1, 'slug' => 'jomala'],
            ['id' => 36932, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Kumlinge', 'active' => 1, 'slug' => 'kumlinge'],
            ['id' => 36933, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Kökar', 'active' => 1, 'slug' => 'kokar'],
            ['id' => 36934, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Lemland', 'active' => 1, 'slug' => 'lemland'],
            ['id' => 36935, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Lumparland', 'active' => 1, 'slug' => 'lumparland'],
            ['id' => 36936, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Mariehamn', 'active' => 1, 'slug' => 'mariehamn'],
            ['id' => 36937, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Saltvik', 'active' => 1, 'slug' => 'saltvik'],
            ['id' => 36938, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Sottunga', 'active' => 1, 'slug' => 'sottunga'],
            ['id' => 36939, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Sund', 'active' => 1, 'slug' => 'sund'],
            ['id' => 36940, 'region_id' => 742851, 'country_code' => 'FI', 'name' => 'Vårdö', 'active' => 1, 'slug' => 'vardo'],
            ['id' => 36941, 'region_id' => 742868, 'country_code' => 'FI', 'name' => 'Carelia del Sur', 'active' => 1, 'slug' => 'carelia-del-sur'],
            ['id' => 36942, 'region_id' => 742868, 'country_code' => 'FI', 'name' => 'Kymenlaakso', 'active' => 1, 'slug' => 'kymenlaakso'],
            ['id' => 36943, 'region_id' => 742868, 'country_code' => 'FI', 'name' => 'Päijänne Tavastia', 'active' => 1, 'slug' => 'paijanne-tavastia'],
            ['id' => 36944, 'region_id' => 742868, 'country_code' => 'FI', 'name' => 'Tavastia Propia', 'active' => 1, 'slug' => 'tavastia-propia'],
            ['id' => 36945, 'region_id' => 742868, 'country_code' => 'FI', 'name' => 'Uusimaa', 'active' => 1, 'slug' => 'uusimaa'],
            ['id' => 36946, 'region_id' => 742868, 'country_code' => 'FI', 'name' => 'Uusimaa del Este', 'active' => 1, 'slug' => 'uusimaa-del-este'],
            ['id' => 36947, 'region_id' => 742875, 'country_code' => 'FI', 'name' => 'Finlandia Central', 'active' => 1, 'slug' => 'finlandia-central'],
            ['id' => 36948, 'region_id' => 742875, 'country_code' => 'FI', 'name' => 'Finlandia Propia', 'active' => 1, 'slug' => 'finlandia-propia'],
            ['id' => 36949, 'region_id' => 742875, 'country_code' => 'FI', 'name' => 'Ostrobothnia', 'active' => 1, 'slug' => 'ostrobothnia'],
            ['id' => 36950, 'region_id' => 742875, 'country_code' => 'FI', 'name' => 'Ostrobothnia Central', 'active' => 1, 'slug' => 'ostrobothnia-central'],
            ['id' => 36951, 'region_id' => 742875, 'country_code' => 'FI', 'name' => 'Ostrobothnia del Sur', 'active' => 1, 'slug' => 'ostrobothnia-del-sur'],
            ['id' => 36952, 'region_id' => 742875, 'country_code' => 'FI', 'name' => 'Pirkanmaa', 'active' => 1, 'slug' => 'pirkanmaa'],
            ['id' => 36953, 'region_id' => 742875, 'country_code' => 'FI', 'name' => 'Satakunta', 'active' => 1, 'slug' => 'satakunta'],
            ['id' => 36954, 'region_id' => 742883, 'country_code' => 'FI', 'name' => 'Carelia del Norte', 'active' => 1, 'slug' => 'carelia-del-norte'],
            ['id' => 36955, 'region_id' => 742883, 'country_code' => 'FI', 'name' => 'Savonia del Norte', 'active' => 1, 'slug' => 'savonia-del-norte'],
            ['id' => 36956, 'region_id' => 742883, 'country_code' => 'FI', 'name' => 'Savonia del Sur', 'active' => 1, 'slug' => 'savonia-del-sur'],
            ['id' => 36957, 'region_id' => 742887, 'country_code' => 'FI', 'name' => 'Rovaniemi', 'active' => 1, 'slug' => 'rovaniemi'],
            ['id' => 36958, 'region_id' => 742887, 'country_code' => 'FI', 'name' => 'Kemi', 'active' => 1, 'slug' => 'kemi'],
            ['id' => 36959, 'region_id' => 742887, 'country_code' => 'FI', 'name' => 'Tornio', 'active' => 1, 'slug' => 'tornio'],
            ['id' => 36960, 'region_id' => 742887, 'country_code' => 'FI', 'name' => 'Kemijärvi', 'active' => 1, 'slug' => 'kemijarvi'],
            ['id' => 36961, 'region_id' => 742892, 'country_code' => 'FI', 'name' => 'Kainuu', 'active' => 1, 'slug' => 'kainuu'],
            ['id' => 36962, 'region_id' => 742892, 'country_code' => 'FI', 'name' => 'Ostrobothnia del Norte', 'active' => 1, 'slug' => 'ostrobothnia-del-norte']
    	];
    }
}
