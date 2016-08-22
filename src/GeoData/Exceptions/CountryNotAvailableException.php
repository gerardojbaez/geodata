<?php

namespace Gerardojbaez\GeoData\Exceptions;

class CountryNotAvailableException extends \Exception
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

        $this->message = "Country not available: {$country}";

        return $this;
    }
}