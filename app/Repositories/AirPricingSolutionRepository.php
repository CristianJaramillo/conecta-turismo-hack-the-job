<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 12/06/2019
 * Time: 08:51 PM
 */

namespace App\Repositories;


class AirPricingSolutionRepository extends LowFareSearchRepository
{
    /**
     * @var string
     */
    protected $tagElement = "AirPricingSolution";

    /**
     * @var string
     */
    protected $key = "Key";

}