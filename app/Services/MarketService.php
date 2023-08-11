<?php

namespace App\Services;

use App\Traits\AuthorizesMarketRequests;
use App\Traits\ConsumeExternalServices;
use App\Traits\InteractsWithMarketResponses;
use stdClass;

class MarketService
{
    use ConsumeExternalServices,
        AuthorizesMarketRequests,
        InteractsWithMarketResponses;

    /**
     * The URL to send the requests
     * @var string
     */
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.market.base_uri');
    }

    /**
     * Obtains the list of products from the API
     * @return stdClass|string
     */
    public function getProducts(): stdClass|string
    {
        return $this->makeRequest('GET', 'products');
    }

    /**
     * Obtains the list of products from the API
     * @return stdClass
     */
    public function getProduct($id): stdClass
    {
        return $this->makeRequest('GET', "products/{$id}");
    }

    /**
     * Obtains the list of categories from the API
     * @return stdClass
     */
    public function getCategories(): stdClass
    {
        return $this->makeRequest('GET', 'categories');
    }

    /**
     * Obtains the list of items for a category from the API
     * @return stdClass
     */
    public function getCategoryProducts($id): stdClass
    {
        return $this->makeRequest('GET', "categories/{$id}/products");
    }

    /**
     * Retrieve the user information from the API
     * @return stdClass
     */
    public function getUserInformation(): stdClass
    {
        return $this->makeRequest('GET', 'users/me');
    }
}
