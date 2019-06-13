<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 30/05/2019
 * Time: 12:19 AM
 */

namespace App\Repositories;


use DOMDocument;

/**
 * Class LowFareSearchRepository
 * @package App\Repositories
 */
abstract class LowFareSearchRepository implements Repository
{

    protected $tagElement = null;
    protected $key = null;
    private $lowFareSearch;

    /**
     * FlightDetailsRepository constructor.
     */
    public function __construct()
    {
        $this->lowFareSearch = new DomDocument;
        $this->lowFareSearch->validateOnParse = true;
        $this->lowFareSearch->Load(storage_path('app/response.xml'));
    }


    /**
     * @return array|mixed
     */
    function findAll()
    {
        return domDocument2Array($this->lowFareSearch->getElementsByTagName($this->tagElement));
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