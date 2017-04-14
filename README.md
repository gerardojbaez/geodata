# GeoData

GeoData is a Laravel package that provides basic geographical data like Countries, Regions and Cities.

## Content
- [Installation](#installation)
	- [Composer](#composer)
	- [Service Provider](#service-provider)
	- [Migrations and Seeders](#migrations-and-seeders)
	- [Traits and Contracts](#traits-and-contracts)
	- [Available Countries](#available-countries)
- [Usage](#usage)
    - [Installing Countries](#installing-countries)
	- [Models](#models)
	- [Controllers](#controllers)
	- [Routes](#routes)
- [License](#license)

## Installation

### Composer

Pull this package through Composer (file `composer.json`)

```js
{
    "require": {
        "php": ">=5.5.9",
        "laravel/framework": "5.2.*",
        "gerardojbaez/geodata": "0.*"
    }
}
```

Run this command inside your terminal.

	composer update

### Service Provider
Add the package to your application service providers in config/app.php file.
```php
<?php

'providers' => [

	[...]

	/**
	 * Third Party Service Providers...
	 */
	Gerardojbaez\GeoData\GeoDataServiceProvider::class,
]
```

### Migrations and Seeders

Publish package migrations and seeders with:

	php artisan vendor:publish

Then run migrations.

	php artisan migrate

If you want **all countries**, run:

	php artisan db:seed --class AllCountriesSeeder

If you want specific countries, run:

	php artisan db:seed --class Gerardojbaez\\GeoData\\Seeders\\UnitedStatesSeeder
	php artisan db:seed --class Gerardojbaez\\GeoData\\Seeders\\PuertoRicoSeeder
	[...]

Check [available countries](#available-countries) below.

### Available Countries

| Countries           |
|---------------------|
| Afghanistan         |
| Albania             |
| Algeria             |
| Andorra             |
| Angola              |
| Antigua and Barbuda |
| Argentina           |
| Aruba               |
| Australia           |
| Austria             |
| Bahamas             |
| Barbados            |
| Belgium             |
| Belize              |
| Bermuda             |
| Bolivia             |
| Brazil              |
| Canada              |
| Chile               |
| China               |
| Colombia            |
| Costa Rica          |
| Croatia             |
| Cuba                |
| Czech Republic      |
| Denmark             |
| Dominican Republic  |
| Ecuador             |
| El Salvador         |
| Equatorial Guinea   |
| Estonia             |
| Finland             |
| France              |
| Germany             |
| Greece              |
| Greenland           |
| Guatemala           |
| Guyana              |
| Haiti               |
| Honduras            |
| Hong Kong           |
| India               |
| Indonesia           |
| Ireland             |
| Israel              |
| Italy               |
| Ivory Coast         |
| Jamaica             |
| Japan               |
| Latvia              |
| Lebanon             |
| Luxembourg          |
| Malaysia            |
| Mexico              |
| Morocco             |
| Netherlands         |
| Nicaragua           |
| Nigeria             |
| Norway              |
| Pakistan            |
| Panama              |
| Papua New Guinea    |
| Paraguay            |
| Peru                |
| Philippines         |
| Poland              |
| Portugal            |
| Puerto Rico         |
| Romania             |
| Russia              |
| Saint Lucia         |
| San Marino          |
| Singapore           |
| South Africa        |
| Spain               |
| Sri Lanka           |
| Sweden              |
| Switzerland         |
| Thailand            |
| Turkey              |
| United Kingdom      |
| United States       |
| Uruguay             |
| Venezuela           |


### Traits and Contracts
You can use GeoData traits when you need to define a relation to countries, regions and/or cities.

See the following example:

```php
<?php

namespace App\Models;

// [...]
use Gerardojbaez\GeoData\Contracts\HasCountryContract;
use Gerardojbaez\GeoData\Contracts\HasRegionContract;
use Gerardojbaez\GeoData\Contracts\HasCityContract;
use Gerardojbaez\GeoData\Traits\HasCountry;
use Gerardojbaez\GeoData\Traits\HasRegion;
use Gerardojbaez\GeoData\Traits\HasCity;

class User extends Model implements HasCountryContract, HasRegionContract, HasCityContract
{
	use HasCountry, HasRegion, HasCity;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_code',
        'region_id',
        'city_id',
        ...
    ];
```

## Usage

### Installing Countries

In addition to install countries via command line using seeders, you can also
install countries through the `CountryInstaller` class. This will help you create a "web interface" that will give your customers or users the ability to install countries as needed. The installer will check if the country has been already installed and in that case will throw `Gerardojbaez\Geodata\Exceptions\CountryAlreadyInstalledException`.

The installation include:

- The country
- Country Regions
- Country Cities

It's as simple as:

```php
<?php

use Gerardojbaez\Geodata\CountryInstaller;

// Install United States.
$installer = new CountryInstaller('United States');
$installer->install();

// Install Puerto Rico.
$installer = new CountryInstaller('Puerto Rico');
$installer->install();

// Install Spain
$installer = new CountryInstaller('Spain');
$installer->install();
```

### Models

This package comes with `Gerardojbaez\GeoData\Models\Country`,
`Gerardojbaez\GeoData\Models\Region` and
`Gerardojbaez\GeoData\Models\City` models.

Take a look at each model for more details.

### Controllers
If you want to provide countries, regions and/or cities data to your frontend you may want to use
`Gerardojbaez\GeoData\Controllers\CountriesController`,
`Gerardojbaez\GeoData\Controllers\RegionsController` and
`Gerardojbaez\GeoData\Controllers\CitiesController` controllers.

Controllers returns a json reponse containing (if any) the requested data.

#### Routes

This is an example. You can structure these routes as you want.

```php
<?php

// Show countries list.
Route::get('api/geo/countries', [
	'uses' => '\Gerardojbaez\GeoData\Controllers\CountriesController@countries',
	'as' => 'geodata.countries'
]);

// Show regions list.
Route::get('api/geo/{country}/regions', [
	'uses' => '\Gerardojbaez\GeoData\Controllers\RegionsController@regions',
	'as' => 'geodata.regions'
]);

// Show cities list.
Route::get('api/geo/{country}/{region}/cities', [
	'uses' => '\Gerardojbaez\GeoData\Controllers\CitiesController@cities',
	'as' => 'geodata.cities'
]);
```

## License

This package is free software distributed under the terms of the MIT license.
