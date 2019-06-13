<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 29/05/2019
 * Time: 11:50 PM
 */

namespace App\Repositories;

/**
 * Class FlightDetailRepository
 * @package App\Repositories
 */
class FlightDetailRepository extends LowFareSearchRepository
{

    /**
     * @var string
     */
    protected $tagElement = "FlightDetails";

    /**
     * @var string
     */
    protected $key = "Key";

}