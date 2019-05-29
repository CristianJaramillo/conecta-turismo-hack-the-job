<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 29/05/2019
 * Time: 05:14 PM
 */

namespace App\Repositories;


use SimpleXMLElement;

/**
 * Class AirAvailRepository
 * @package App\Repositories
 */
class AirAvailRepository implements Repository
{
    private $airAvailSearchResponse;

    /**
     * AirAvailRepository constructor.
     */
    public function __construct()
    {
        $file = \File::get(storage_path('app/response2.xml'));
        $xml  = new SimpleXMLElement($file);
        $xml->registerXPathNamespace("s", "http://schemas.xmlsoap.org/soap/envelope/");
        $body = $xml->xpath('s:Body');
        $this->airAvailSearchResponse = $body[0]->AirAvailSearchResponse;
    }


    /**
     * @return mixed
     */
    function findAll()
    {
        return $this->airAvailSearchResponse->AirAvailSearchResult;
    }
}