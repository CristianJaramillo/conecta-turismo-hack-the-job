<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 13/06/2019
 * Time: 12:10 AM
 */

namespace App\Repositories;


class AirPricingInfoRepository extends LowFareSearchRepository
{

    /**
     * @var string
     */
    protected $tagElement = "AirPricingInfo";

    /**
     * @var string
     */
    protected $key = "Key";

}