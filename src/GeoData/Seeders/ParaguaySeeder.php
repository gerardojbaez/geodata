<?php

namespace Gerardojbaez\GeoData\Seeders;

use Illuminate\Database\Seeder;
use Gerardojbaez\GeoData\Models\Country;
use Gerardojbaez\GeoData\Models\Region;
use Gerardojbaez\GeoData\Models\City;

class ParaguaySeeder extends Seeder
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
    	return ['code' => 'PY', 'name' => 'Paraguay', 'slug' => 'paraguay'];
    }

    /**
     * Get country regions.
     *
     * @return array
     */
    public function regions()
    {
    	return [
            ['id' => 707230, 'country_code' => 'PY', 'name' => 'Alto Paraguay', 'active' => 1, 'slug' => 'alto-paraguay'],
            ['id' => 707231, 'country_code' => 'PY', 'name' => 'Alto Paraná', 'active' => 1, 'slug' => 'alto-parana'],
            ['id' => 707232, 'country_code' => 'PY', 'name' => 'Amambay', 'active' => 1, 'slug' => 'amambay'],
            ['id' => 707233, 'country_code' => 'PY', 'name' => 'Asunción', 'active' => 1, 'slug' => 'asuncion'],
            ['id' => 707234, 'country_code' => 'PY', 'name' => 'Boquerón', 'active' => 1, 'slug' => 'boqueron'],
            ['id' => 707235, 'country_code' => 'PY', 'name' => 'Caaguazú', 'active' => 1, 'slug' => 'caaguazu'],
            ['id' => 707236, 'country_code' => 'PY', 'name' => 'Caazapá', 'active' => 1, 'slug' => 'caazapa'],
            ['id' => 707237, 'country_code' => 'PY', 'name' => 'Canindeyú', 'active' => 1, 'slug' => 'canindeyu'],
            ['id' => 707238, 'country_code' => 'PY', 'name' => 'Central', 'active' => 1, 'slug' => 'central'],
            ['id' => 707239, 'country_code' => 'PY', 'name' => 'Concepción', 'active' => 1, 'slug' => 'concepcion'],
            ['id' => 707240, 'country_code' => 'PY', 'name' => 'Cordillera', 'active' => 1, 'slug' => 'cordillera'],
            ['id' => 707241, 'country_code' => 'PY', 'name' => 'Guairá', 'active' => 1, 'slug' => 'guaira'],
            ['id' => 707242, 'country_code' => 'PY', 'name' => 'Itapúa', 'active' => 1, 'slug' => 'itapua'],
            ['id' => 707244, 'country_code' => 'PY', 'name' => 'Ñeembucú', 'active' => 1, 'slug' => 'neembucu'],
            ['id' => 707245, 'country_code' => 'PY', 'name' => 'Paraguarí', 'active' => 1, 'slug' => 'paraguari'],
            ['id' => 707246, 'country_code' => 'PY', 'name' => 'Presidente Hayes', 'active' => 1, 'slug' => 'presidente-hayes'],
            ['id' => 709773, 'country_code' => 'PY', 'name' => 'Misiones', 'active' => 1, 'slug' => 'misiones'],
            ['id' => 709827, 'country_code' => 'PY', 'name' => 'San Pedro', 'active' => 1, 'slug' => 'san-pedro']
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
            ['id' => 23715, 'region_id' => 707230, 'country_code' => 'PY', 'name' => 'Fuerte Olimpo', 'active' => 1, 'slug' => 'fuerte-olimpo'],
            ['id' => 23716, 'region_id' => 707230, 'country_code' => 'PY', 'name' => 'La Victoria', 'active' => 1, 'slug' => 'la-victoria'],
            ['id' => 23717, 'region_id' => 707230, 'country_code' => 'PY', 'name' => 'Mayor Pablo Lagerenza', 'active' => 1, 'slug' => 'mayor-pablo-lagerenza'],
            ['id' => 23718, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Ciudad del Este', 'active' => 1, 'slug' => 'ciudad-del-este'],
            ['id' => 23719, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Juan León Mallorquín', 'active' => 1, 'slug' => 'juan-leon-mallorquin'],
            ['id' => 23720, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Domingo Martínez de Irala', 'active' => 1, 'slug' => 'domingo-martinez-de-irala'],
            ['id' => 23721, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Hernandarias', 'active' => 1, 'slug' => 'hernandarias'],
            ['id' => 23722, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Iruña', 'active' => 1, 'slug' => 'iruna'],
            ['id' => 23723, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Itakyry', 'active' => 1, 'slug' => 'itakyry'],
            ['id' => 23724, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Juan Emilio O\'Leary', 'active' => 1, 'slug' => 'juan-emilio-oleary'],
            ['id' => 23725, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Los Cedrales', 'active' => 1, 'slug' => 'los-cedrales'],
            ['id' => 23726, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Mbaracayú', 'active' => 1, 'slug' => 'mbaracayu'],
            ['id' => 23727, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Minga Guazú', 'active' => 1, 'slug' => 'minga-guazu'],
            ['id' => 23728, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Minga Porá', 'active' => 1, 'slug' => 'minga-pora'],
            ['id' => 23729, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Ñacunday', 'active' => 1, 'slug' => 'nacunday'],
            ['id' => 23730, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Naranjal', 'active' => 1, 'slug' => 'naranjal'],
            ['id' => 23731, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Presidente Franco', 'active' => 1, 'slug' => 'presidente-franco'],
            ['id' => 23732, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'San Alberto', 'active' => 1, 'slug' => 'san-alberto'],
            ['id' => 23733, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'San Cristóbal', 'active' => 1, 'slug' => 'san-cristobal'],
            ['id' => 23734, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Santa Rosa del Monday', 'active' => 1, 'slug' => 'santa-rosa-del-monday'],
            ['id' => 23735, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Santa Rita', 'active' => 1, 'slug' => 'santa-rita'],
            ['id' => 23736, 'region_id' => 707231, 'country_code' => 'PY', 'name' => 'Yguazú', 'active' => 1, 'slug' => 'yguazu'],
            ['id' => 23737, 'region_id' => 707232, 'country_code' => 'PY', 'name' => 'Bella Vista', 'active' => 1, 'slug' => 'bella-vista'],
            ['id' => 23738, 'region_id' => 707232, 'country_code' => 'PY', 'name' => 'Capitán Bado', 'active' => 1, 'slug' => 'capitan-bado'],
            ['id' => 23739, 'region_id' => 707232, 'country_code' => 'PY', 'name' => 'Pedro Juan Caballero', 'active' => 1, 'slug' => 'pedro-juan-caballero'],
            ['id' => 23740, 'region_id' => 707233, 'country_code' => 'PY', 'name' => 'Carlos A. López', 'active' => 1, 'slug' => 'carlos-a-lopez'],
            ['id' => 23741, 'region_id' => 707233, 'country_code' => 'PY', 'name' => 'Catedral', 'active' => 1, 'slug' => 'catedral'],
            ['id' => 23742, 'region_id' => 707233, 'country_code' => 'PY', 'name' => 'Ricardo Brugada', 'active' => 1, 'slug' => 'ricardo-brugada'],
            ['id' => 23743, 'region_id' => 707233, 'country_code' => 'PY', 'name' => 'Hipódromo', 'active' => 1, 'slug' => 'hipodromo'],
            ['id' => 23744, 'region_id' => 707234, 'country_code' => 'PY', 'name' => 'Mariscal José Félix Estigarribia', 'active' => 1, 'slug' => 'mariscal-jose-felix-estigarribia'],
            ['id' => 23745, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Caaguazú', 'active' => 1, 'slug' => 'caaguazu'],
            ['id' => 23746, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Carayaó', 'active' => 1, 'slug' => 'carayao'],
            ['id' => 23747, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Coronel Oviedo', 'active' => 1, 'slug' => 'coronel-oviedo'],
            ['id' => 23748, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Dr. Cecilio Báez', 'active' => 1, 'slug' => 'dr-cecilio-baez'],
            ['id' => 23749, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Dr. J. Eulogio Estigarribia', 'active' => 1, 'slug' => 'dr-j-eulogio-estigarribia'],
            ['id' => 23750, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Dr. Juan Manuel Frutos', 'active' => 1, 'slug' => 'dr-juan-manuel-frutos'],
            ['id' => 23751, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'José Domingo Ocampos', 'active' => 1, 'slug' => 'jose-domingo-ocampos'],
            ['id' => 23752, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'La Pastora', 'active' => 1, 'slug' => 'la-pastora'],
            ['id' => 23753, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Mcal. Francisco S. López', 'active' => 1, 'slug' => 'mcal-francisco-s-lopez'],
            ['id' => 23754, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Nueva Londres', 'active' => 1, 'slug' => 'nueva-londres'],
            ['id' => 23755, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'R.i. Corrales', 'active' => 1, 'slug' => 'r-i-corrales'],
            ['id' => 23756, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Raúl Arsenio Oviedo', 'active' => 1, 'slug' => 'raul-arsenio-oviedo'],
            ['id' => 23757, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Repatriación', 'active' => 1, 'slug' => 'repatriacion'],
            ['id' => 23758, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'San Joaquín', 'active' => 1, 'slug' => 'san-joaquin'],
            ['id' => 23759, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'San José de los Arroyos', 'active' => 1, 'slug' => 'san-jose-de-los-arroyos'],
            ['id' => 23760, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Santa Rosa Del Mbutuy', 'active' => 1, 'slug' => 'santa-rosa-del-mbutuy'],
            ['id' => 23761, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Simón Bolívar', 'active' => 1, 'slug' => 'simon-bolivar'],
            ['id' => 23762, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Tres de Febrero', 'active' => 1, 'slug' => 'tres-de-febrero'],
            ['id' => 23763, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Vaquería', 'active' => 1, 'slug' => 'vaqueria'],
            ['id' => 23764, 'region_id' => 707235, 'country_code' => 'PY', 'name' => 'Yhú', 'active' => 1, 'slug' => 'yhu'],
            ['id' => 23765, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'Abaí', 'active' => 1, 'slug' => 'abai'],
            ['id' => 23766, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'Buena Vista', 'active' => 1, 'slug' => 'buena-vista'],
            ['id' => 23767, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'Caazapá', 'active' => 1, 'slug' => 'caazapa'],
            ['id' => 23768, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'Doctor Moisés S. Bertoni', 'active' => 1, 'slug' => 'doctor-moises-s-bertoni'],
            ['id' => 23769, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'Fulgencio Yegros', 'active' => 1, 'slug' => 'fulgencio-yegros'],
            ['id' => 23770, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'General Higinio Morínigo', 'active' => 1, 'slug' => 'general-higinio-morinigo'],
            ['id' => 23771, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'Maciel', 'active' => 1, 'slug' => 'maciel'],
            ['id' => 23772, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'San Juan Nepomuceno', 'active' => 1, 'slug' => 'san-juan-nepomuceno'],
            ['id' => 23773, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'Tabaí', 'active' => 1, 'slug' => 'tabai'],
            ['id' => 23774, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'Yegros', 'active' => 1, 'slug' => 'yegros'],
            ['id' => 23775, 'region_id' => 707236, 'country_code' => 'PY', 'name' => 'Yuty', 'active' => 1, 'slug' => 'yuty'],
            ['id' => 23776, 'region_id' => 707237, 'country_code' => 'PY', 'name' => 'Corpus Christi', 'active' => 1, 'slug' => 'corpus-christi'],
            ['id' => 23777, 'region_id' => 707237, 'country_code' => 'PY', 'name' => 'General Francisco CaballeroÁlvarez', 'active' => 1, 'slug' => 'general-francisco-caballeroalvarez'],
            ['id' => 23778, 'region_id' => 707237, 'country_code' => 'PY', 'name' => 'Itanará', 'active' => 1, 'slug' => 'itanara'],
            ['id' => 23779, 'region_id' => 707237, 'country_code' => 'PY', 'name' => 'Katueté', 'active' => 1, 'slug' => 'katuete'],
            ['id' => 23780, 'region_id' => 707237, 'country_code' => 'PY', 'name' => 'La Paloma', 'active' => 1, 'slug' => 'la-paloma'],
            ['id' => 23781, 'region_id' => 707237, 'country_code' => 'PY', 'name' => 'Nueva Esperanza', 'active' => 1, 'slug' => 'nueva-esperanza'],
            ['id' => 23782, 'region_id' => 707237, 'country_code' => 'PY', 'name' => 'Salto del Guairá', 'active' => 1, 'slug' => 'salto-del-guaira'],
            ['id' => 23783, 'region_id' => 707237, 'country_code' => 'PY', 'name' => 'Villa San Isidro Curuguaty', 'active' => 1, 'slug' => 'villa-san-isidro-curuguaty'],
            ['id' => 23784, 'region_id' => 707237, 'country_code' => 'PY', 'name' => 'Villa Ygatimí', 'active' => 1, 'slug' => 'villa-ygatimi'],
            ['id' => 23785, 'region_id' => 707237, 'country_code' => 'PY', 'name' => 'Ypejhú', 'active' => 1, 'slug' => 'ypejhu'],
            ['id' => 23786, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Areguá', 'active' => 1, 'slug' => 'aregua'],
            ['id' => 23787, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Capiatá', 'active' => 1, 'slug' => 'capiata'],
            ['id' => 23788, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Fernando de la Mora', 'active' => 1, 'slug' => 'fernando-de-la-mora'],
            ['id' => 23789, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Guarambaré', 'active' => 1, 'slug' => 'guarambare'],
            ['id' => 23790, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Itá', 'active' => 1, 'slug' => 'ita'],
            ['id' => 23791, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Itauguá', 'active' => 1, 'slug' => 'itaugua'],
            ['id' => 23792, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Juan Augusto Saldívar', 'active' => 1, 'slug' => 'juan-augusto-saldivar'],
            ['id' => 23793, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Lambaré', 'active' => 1, 'slug' => 'lambare'],
            ['id' => 23794, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Limpio', 'active' => 1, 'slug' => 'limpio'],
            ['id' => 23795, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Luque', 'active' => 1, 'slug' => 'luque'],
            ['id' => 23796, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Mariano Roque Alonso', 'active' => 1, 'slug' => 'mariano-roque-alonso'],
            ['id' => 23797, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Ñemby', 'active' => 1, 'slug' => 'nemby'],
            ['id' => 23798, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Nueva Italia', 'active' => 1, 'slug' => 'nueva-italia'],
            ['id' => 23799, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'San Antonio', 'active' => 1, 'slug' => 'san-antonio'],
            ['id' => 23800, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'San Lorenzo', 'active' => 1, 'slug' => 'san-lorenzo'],
            ['id' => 23801, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Villa Elisa', 'active' => 1, 'slug' => 'villa-elisa'],
            ['id' => 23802, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Villeta', 'active' => 1, 'slug' => 'villeta'],
            ['id' => 23803, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Ypacaraí', 'active' => 1, 'slug' => 'ypacarai'],
            ['id' => 23804, 'region_id' => 707238, 'country_code' => 'PY', 'name' => 'Ypané', 'active' => 1, 'slug' => 'ypane'],
            ['id' => 23805, 'region_id' => 707239, 'country_code' => 'PY', 'name' => 'Belén', 'active' => 1, 'slug' => 'belen'],
            ['id' => 23806, 'region_id' => 707239, 'country_code' => 'PY', 'name' => 'Concepción', 'active' => 1, 'slug' => 'concepcion'],
            ['id' => 23807, 'region_id' => 707239, 'country_code' => 'PY', 'name' => 'Horqueta', 'active' => 1, 'slug' => 'horqueta'],
            ['id' => 23808, 'region_id' => 707239, 'country_code' => 'PY', 'name' => 'Loreto', 'active' => 1, 'slug' => 'loreto'],
            ['id' => 23809, 'region_id' => 707239, 'country_code' => 'PY', 'name' => 'San Carlos', 'active' => 1, 'slug' => 'san-carlos'],
            ['id' => 23810, 'region_id' => 707239, 'country_code' => 'PY', 'name' => 'San Lázaro', 'active' => 1, 'slug' => 'san-lazaro'],
            ['id' => 23811, 'region_id' => 707239, 'country_code' => 'PY', 'name' => 'Yby Yaú', 'active' => 1, 'slug' => 'yby-yau'],
            ['id' => 23812, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Altos', 'active' => 1, 'slug' => 'altos'],
            ['id' => 23813, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Arroyos y Esteros', 'active' => 1, 'slug' => 'arroyos-y-esteros'],
            ['id' => 23814, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Atyra', 'active' => 1, 'slug' => 'atyra'],
            ['id' => 23815, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Caacupé', 'active' => 1, 'slug' => 'caacupe'],
            ['id' => 23816, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Caraguatay', 'active' => 1, 'slug' => 'caraguatay'],
            ['id' => 23817, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Emboscada', 'active' => 1, 'slug' => 'emboscada'],
            ['id' => 23818, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Eusebio Ayala', 'active' => 1, 'slug' => 'eusebio-ayala'],
            ['id' => 23819, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Isla Pucú', 'active' => 1, 'slug' => 'isla-pucu'],
            ['id' => 23820, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Itacurubí de la Cordillera', 'active' => 1, 'slug' => 'itacurubi-de-la-cordillera'],
            ['id' => 23821, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Juan de Mena', 'active' => 1, 'slug' => 'juan-de-mena'],
            ['id' => 23822, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Loma Grande', 'active' => 1, 'slug' => 'loma-grande'],
            ['id' => 23823, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Mbocayaty del Yhaguy', 'active' => 1, 'slug' => 'mbocayaty-del-yhaguy'],
            ['id' => 23824, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Nueva Colombia', 'active' => 1, 'slug' => 'nueva-colombia'],
            ['id' => 23825, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Piribebuy', 'active' => 1, 'slug' => 'piribebuy'],
            ['id' => 23826, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Primero de Marzo', 'active' => 1, 'slug' => 'primero-de-marzo'],
            ['id' => 23827, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'San Bernardino', 'active' => 1, 'slug' => 'san-bernardino'],
            ['id' => 23828, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'San José Obrero', 'active' => 1, 'slug' => 'san-jose-obrero'],
            ['id' => 23829, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Santa Elena', 'active' => 1, 'slug' => 'santa-elena'],
            ['id' => 23830, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Tobatí', 'active' => 1, 'slug' => 'tobati'],
            ['id' => 23831, 'region_id' => 707240, 'country_code' => 'PY', 'name' => 'Valenzuela', 'active' => 1, 'slug' => 'valenzuela'],
            ['id' => 23832, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Borja', 'active' => 1, 'slug' => 'borja'],
            ['id' => 23833, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Capitán Mauricio José Troche', 'active' => 1, 'slug' => 'capitan-mauricio-jose-troche'],
            ['id' => 23834, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Coronel Martínez', 'active' => 1, 'slug' => 'coronel-martinez'],
            ['id' => 23835, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Doctor Botrell', 'active' => 1, 'slug' => 'doctor-botrell'],
            ['id' => 23836, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Félix Pérez Cardozo', 'active' => 1, 'slug' => 'felix-perez-cardozo'],
            ['id' => 23837, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'General Eugenio A. Garay', 'active' => 1, 'slug' => 'general-eugenio-a-garay'],
            ['id' => 23838, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Independencia', 'active' => 1, 'slug' => 'independencia'],
            ['id' => 23839, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Itapé', 'active' => 1, 'slug' => 'itape'],
            ['id' => 23840, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Iturbe', 'active' => 1, 'slug' => 'iturbe'],
            ['id' => 23841, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'José A. Fassardi', 'active' => 1, 'slug' => 'jose-a-fassardi'],
            ['id' => 23842, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Mbocayaty del Guairá', 'active' => 1, 'slug' => 'mbocayaty-del-guaira'],
            ['id' => 23843, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Natalicio Talavera', 'active' => 1, 'slug' => 'natalicio-talavera'],
            ['id' => 23844, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Ñumí', 'active' => 1, 'slug' => 'numi'],
            ['id' => 23845, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Paso Yovai', 'active' => 1, 'slug' => 'paso-yovai'],
            ['id' => 23846, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'San Salvador', 'active' => 1, 'slug' => 'san-salvador'],
            ['id' => 23847, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Villarrica', 'active' => 1, 'slug' => 'villarrica'],
            ['id' => 23848, 'region_id' => 707241, 'country_code' => 'PY', 'name' => 'Yataity del Guairá', 'active' => 1, 'slug' => 'yataity-del-guaira'],
            ['id' => 23849, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Alto Verá', 'active' => 1, 'slug' => 'alto-vera'],
            ['id' => 23850, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Bella Vista', 'active' => 1, 'slug' => 'bella-vista'],
            ['id' => 23851, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Cambyretá', 'active' => 1, 'slug' => 'cambyreta'],
            ['id' => 23852, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Capitán Meza', 'active' => 1, 'slug' => 'capitan-meza'],
            ['id' => 23853, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Capitán Miranda', 'active' => 1, 'slug' => 'capitan-miranda'],
            ['id' => 23854, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Carlos Antonio López', 'active' => 1, 'slug' => 'carlos-antonio-lopez'],
            ['id' => 23855, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Carmen del Paraná', 'active' => 1, 'slug' => 'carmen-del-parana'],
            ['id' => 23856, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Coronel Bogado', 'active' => 1, 'slug' => 'coronel-bogado'],
            ['id' => 23857, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Edelira', 'active' => 1, 'slug' => 'edelira'],
            ['id' => 23858, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Encarnación', 'active' => 1, 'slug' => 'encarnacion'],
            ['id' => 23859, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Fram', 'active' => 1, 'slug' => 'fram'],
            ['id' => 23860, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'General Artigas', 'active' => 1, 'slug' => 'general-artigas'],
            ['id' => 23861, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'General Delgado', 'active' => 1, 'slug' => 'general-delgado'],
            ['id' => 23862, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Hohenau', 'active' => 1, 'slug' => 'hohenau'],
            ['id' => 23863, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Itapúa Poty', 'active' => 1, 'slug' => 'itapua-poty'],
            ['id' => 23864, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Jesús', 'active' => 1, 'slug' => 'jesus'],
            ['id' => 23865, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'José Leandro Oviedo', 'active' => 1, 'slug' => 'jose-leandro-oviedo'],
            ['id' => 23866, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'La Paz', 'active' => 1, 'slug' => 'la-paz'],
            ['id' => 23867, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Mayor Julio D. Otaño', 'active' => 1, 'slug' => 'mayor-julio-d-otano'],
            ['id' => 23868, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Natalio', 'active' => 1, 'slug' => 'natalio'],
            ['id' => 23869, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Nueva Alborada', 'active' => 1, 'slug' => 'nueva-alborada'],
            ['id' => 23870, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Obligado', 'active' => 1, 'slug' => 'obligado'],
            ['id' => 23871, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Pirapó', 'active' => 1, 'slug' => 'pirapo'],
            ['id' => 23872, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'San Cosme y Damián', 'active' => 1, 'slug' => 'san-cosme-y-damian'],
            ['id' => 23873, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'San Juan del Paraná', 'active' => 1, 'slug' => 'san-juan-del-parana'],
            ['id' => 23874, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'San Pedro del Paraná', 'active' => 1, 'slug' => 'san-pedro-del-parana'],
            ['id' => 23875, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'San Rafael del Paraná', 'active' => 1, 'slug' => 'san-rafael-del-parana'],
            ['id' => 23876, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Tomás Romero Pereira', 'active' => 1, 'slug' => 'tomas-romero-pereira'],
            ['id' => 23877, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Trinidad', 'active' => 1, 'slug' => 'trinidad'],
            ['id' => 23878, 'region_id' => 707242, 'country_code' => 'PY', 'name' => 'Yatytay', 'active' => 1, 'slug' => 'yatytay'],
            ['id' => 23889, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Alberdi', 'active' => 1, 'slug' => 'alberdi'],
            ['id' => 23890, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Cerrito', 'active' => 1, 'slug' => 'cerrito'],
            ['id' => 23891, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Desmochados', 'active' => 1, 'slug' => 'desmochados'],
            ['id' => 23892, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'General José Eduvigis Díaz', 'active' => 1, 'slug' => 'general-jose-eduvigis-diaz'],
            ['id' => 23893, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Guazú Cuá', 'active' => 1, 'slug' => 'guazu-cua'],
            ['id' => 23894, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Humaitá', 'active' => 1, 'slug' => 'humaita'],
            ['id' => 23895, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Isla Umbú', 'active' => 1, 'slug' => 'isla-umbu'],
            ['id' => 23896, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Laureles', 'active' => 1, 'slug' => 'laureles'],
            ['id' => 23897, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Mayor José J. Martinez', 'active' => 1, 'slug' => 'mayor-jose-j-martinez'],
            ['id' => 23898, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Paso de Patria', 'active' => 1, 'slug' => 'paso-de-patria'],
            ['id' => 23899, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Pilar', 'active' => 1, 'slug' => 'pilar'],
            ['id' => 23900, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'San Juan Bautista delÑeembucú', 'active' => 1, 'slug' => 'san-juan-bautista-delneembucu'],
            ['id' => 23901, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Tacuaras', 'active' => 1, 'slug' => 'tacuaras'],
            ['id' => 23902, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Villa Franca', 'active' => 1, 'slug' => 'villa-franca'],
            ['id' => 23903, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Villalbín', 'active' => 1, 'slug' => 'villalbin'],
            ['id' => 23904, 'region_id' => 707244, 'country_code' => 'PY', 'name' => 'Villa Oliva', 'active' => 1, 'slug' => 'villa-oliva'],
            ['id' => 23905, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Acahay', 'active' => 1, 'slug' => 'acahay'],
            ['id' => 23906, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Caapucú', 'active' => 1, 'slug' => 'caapucu'],
            ['id' => 23907, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Carapeguá', 'active' => 1, 'slug' => 'carapegua'],
            ['id' => 23908, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Escobar', 'active' => 1, 'slug' => 'escobar'],
            ['id' => 23909, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'General Bernardino Caballero', 'active' => 1, 'slug' => 'general-bernardino-caballero'],
            ['id' => 23910, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'La Colmena', 'active' => 1, 'slug' => 'la-colmena'],
            ['id' => 23911, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Mbuyapey', 'active' => 1, 'slug' => 'mbuyapey'],
            ['id' => 23912, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Paraguarí', 'active' => 1, 'slug' => 'paraguari'],
            ['id' => 23913, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Pirayú', 'active' => 1, 'slug' => 'pirayu'],
            ['id' => 23914, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Quiindy', 'active' => 1, 'slug' => 'quiindy'],
            ['id' => 23915, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Quyquyhó', 'active' => 1, 'slug' => 'quyquyho'],
            ['id' => 23916, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'San Roque González de Santa Cruz', 'active' => 1, 'slug' => 'san-roque-gonzalez-de-santa-cruz'],
            ['id' => 23917, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Sapucái', 'active' => 1, 'slug' => 'sapucai'],
            ['id' => 23918, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Tebicuary-mí', 'active' => 1, 'slug' => 'tebicuary-mi'],
            ['id' => 23919, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Yaguarón', 'active' => 1, 'slug' => 'yaguaron'],
            ['id' => 23920, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Ybycuí', 'active' => 1, 'slug' => 'ybycui'],
            ['id' => 23921, 'region_id' => 707245, 'country_code' => 'PY', 'name' => 'Ybytimí', 'active' => 1, 'slug' => 'ybytimi'],
            ['id' => 23922, 'region_id' => 707246, 'country_code' => 'PY', 'name' => 'Benjamín Aceval', 'active' => 1, 'slug' => 'benjamin-aceval'],
            ['id' => 23923, 'region_id' => 707246, 'country_code' => 'PY', 'name' => 'Nanawa', 'active' => 1, 'slug' => 'nanawa'],
            ['id' => 23924, 'region_id' => 707246, 'country_code' => 'PY', 'name' => 'Pozo Colorado', 'active' => 1, 'slug' => 'pozo-colorado'],
            ['id' => 23925, 'region_id' => 707246, 'country_code' => 'PY', 'name' => 'Puerto Pinasco', 'active' => 1, 'slug' => 'puerto-pinasco'],
            ['id' => 23926, 'region_id' => 707246, 'country_code' => 'PY', 'name' => 'Villa Hayes', 'active' => 1, 'slug' => 'villa-hayes'],
            ['id' => 23927, 'region_id' => 707246, 'country_code' => 'PY', 'name' => 'Puerto Falcon', 'active' => 1, 'slug' => 'puerto-falcon'],
            ['id' => 23928, 'region_id' => 707246, 'country_code' => 'PY', 'name' => 'Teniente Irala Fernandez', 'active' => 1, 'slug' => 'teniente-irala-fernandez'],
            ['id' => 23879, 'region_id' => 709773, 'country_code' => 'PY', 'name' => 'Ayolas', 'active' => 1, 'slug' => 'ayolas'],
            ['id' => 23880, 'region_id' => 709773, 'country_code' => 'PY', 'name' => 'San Ignacio', 'active' => 1, 'slug' => 'san-ignacio'],
            ['id' => 23881, 'region_id' => 709773, 'country_code' => 'PY', 'name' => 'San Juan Bautista', 'active' => 1, 'slug' => 'san-juan-bautista'],
            ['id' => 23882, 'region_id' => 709773, 'country_code' => 'PY', 'name' => 'San Miguel', 'active' => 1, 'slug' => 'san-miguel'],
            ['id' => 23883, 'region_id' => 709773, 'country_code' => 'PY', 'name' => 'San Patricio', 'active' => 1, 'slug' => 'san-patricio'],
            ['id' => 23884, 'region_id' => 709773, 'country_code' => 'PY', 'name' => 'Santa María', 'active' => 1, 'slug' => 'santa-maria'],
            ['id' => 23885, 'region_id' => 709773, 'country_code' => 'PY', 'name' => 'Santa Rosa', 'active' => 1, 'slug' => 'santa-rosa'],
            ['id' => 23886, 'region_id' => 709773, 'country_code' => 'PY', 'name' => 'Santiago', 'active' => 1, 'slug' => 'santiago'],
            ['id' => 23887, 'region_id' => 709773, 'country_code' => 'PY', 'name' => 'Villa Florida', 'active' => 1, 'slug' => 'villa-florida'],
            ['id' => 23888, 'region_id' => 709773, 'country_code' => 'PY', 'name' => 'Yabebyry', 'active' => 1, 'slug' => 'yabebyry'],
            ['id' => 23929, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Antequera', 'active' => 1, 'slug' => 'antequera'],
            ['id' => 23930, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Capiibary', 'active' => 1, 'slug' => 'capiibary'],
            ['id' => 23931, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Choré', 'active' => 1, 'slug' => 'chore'],
            ['id' => 23932, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'General Elizardo Aquino', 'active' => 1, 'slug' => 'general-elizardo-aquino'],
            ['id' => 23933, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'General Isidoro Resquín', 'active' => 1, 'slug' => 'general-isidoro-resquin'],
            ['id' => 23934, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Guayaibí', 'active' => 1, 'slug' => 'guayaibi'],
            ['id' => 23935, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Itacurubí del Rosario', 'active' => 1, 'slug' => 'itacurubi-del-rosario'],
            ['id' => 23936, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Lima', 'active' => 1, 'slug' => 'lima'],
            ['id' => 23937, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Nueva Germania', 'active' => 1, 'slug' => 'nueva-germania'],
            ['id' => 23938, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'San Estanislao', 'active' => 1, 'slug' => 'san-estanislao'],
            ['id' => 23939, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'San Pablo', 'active' => 1, 'slug' => 'san-pablo'],
            ['id' => 23940, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'San Pedro', 'active' => 1, 'slug' => 'san-pedro'],
            ['id' => 23941, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Santa Rosa del Aguaray', 'active' => 1, 'slug' => 'santa-rosa-del-aguaray'],
            ['id' => 23942, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Tacuatí', 'active' => 1, 'slug' => 'tacuati'],
            ['id' => 23943, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Unión', 'active' => 1, 'slug' => 'union'],
            ['id' => 23944, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Veinticinco de Diciembre', 'active' => 1, 'slug' => 'veinticinco-de-diciembre'],
            ['id' => 23945, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Villa del Rosario', 'active' => 1, 'slug' => 'villa-del-rosario'],
            ['id' => 23946, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Yataity del Norte', 'active' => 1, 'slug' => 'yataity-del-norte'],
            ['id' => 23947, 'region_id' => 709827, 'country_code' => 'PY', 'name' => 'Yrybucua', 'active' => 1, 'slug' => 'yrybucua']
    	];
    }
}
