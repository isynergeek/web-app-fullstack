<?php

namespace App\Dto;

class PropertyListDto
{
    private string|null $name;
    private int|null $priceFrom;
    private int|null $priceTo;
    private int|null $bedrooms;
    private int|null $bathrooms;
    private int|null $storeys;
    private int|null $garages;


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function __construct($name = null,
                                $price_from = null,
                                $price_to = null,
                                $bedrooms = null,
                                $bathrooms = null,
                                $storeys = null,
                                $garages = null)
    {
        $this->name = $name;
        $this->priceFrom = $price_from;
        $this->priceTo = $price_to;
        $this->bedrooms = $bedrooms;
        $this->bathrooms = $bathrooms;
        $this->storeys = $storeys;
        $this->garages = $garages;
    }

    /**
     * @return mixed
     */
    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * @return mixed
     */
    public function getPriceTo()
    {
        return $this->priceTo;
    }

    /**
     * @return mixed
     */
    public function getBedrooms()
    {
        return $this->bedrooms;
    }

    /**
     * @return mixed
     */
    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    /**
     * @return mixed
     */
    public function getStoreys()
    {
        return $this->storeys;
    }

    /**
     * @return mixed
     */
    public function getGarages()
    {
        return $this->garages;
    }

}
