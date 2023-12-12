<?php

namespace App\Services;

use App\Dto\PropertyListDto;
use App\Models\Property;

class PropertyService
{
    public function getList(PropertyListDto $listDto)
    {
        $query = Property::query();

        $name = $listDto->getName();
        $bedrooms = $listDto->getBedrooms();
        $bathrooms = $listDto->getBathrooms();
        $storeys = $listDto->getStoreys();
        $garages = $listDto->getGarages();
        $price_from = $listDto->getPriceFrom();
        $price_to = $listDto->getPriceTo();

        if ($name) {
            $query->where('name', 'like', "%$name%");
        }

        if ($bedrooms) {
            $query->where('bedrooms', $bedrooms);
        }

        if ($bathrooms) {
            $query->where('bathrooms', $bathrooms);
        }

        if ($storeys) {
            $query->where('storeys', $storeys);
        }

        if ($garages) {
            $query->where('garages', $garages);
        }

        if ($price_from) {
            $query->where('price', '>=', $price_from);
        }

        if ($price_to) {
            $query->where('price', '<=', $price_to);
        }

        return $query->get();
    }
}
