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
abstract class AirAvailRepository implements Repository
{

    protected $tagName;
    protected $key;
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


    function findAll()
    {
        return simpleXmlElement2Array($this->airAvailSearchResponse->AirAvailSearchResult->AirAvail->{$this->tagName}[0]);
    }

    /**
     * @param $id
     * @return mixed
     */
    function findById($id)
    {
        return collect($this->findAll())->firstWhere($this->key, $id);
    }

    /**
     * @return int
     */
    function count() : int
    {
        return collect($this->findAll())->count();
    }

}