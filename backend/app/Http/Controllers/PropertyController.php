<?php

namespace App\Http\Controllers;

use App\Dto\PropertyListDto;
use App\Http\Requests\GetPropertyListRequest;
use App\Http\Resources\PropertyResource;
use App\Services\PropertyService;

class PropertyController extends Controller
{
    private $propertyService;

    public function __construct(PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(GetPropertyListRequest $request)
    {
        $listDto = new PropertyListDto(...$request->all());
        $collection = $this->propertyService->getList($listDto);

        return PropertyResource::collection($collection);
    }

}
