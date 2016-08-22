<?php

namespace Gerardojbaez\GeoData\Exceptions;

class CountryAlreadyInstalledException extends \Exception
{
    /**
     * Name of the affected country.
     *
     * @var string
     */
    protected $country;

    /**
     * Set the affected country name.
     *
     * @param  string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        $this->message = "Country already installed: {$country}. Make sure you don't have regions and/or cities that belongs to this country.";

        return $this;
    }
}