<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 30/05/2019
 * Time: 01:49 PM
 */

namespace App\Repositories;

use App\AirPricingGroup;

/**
 * Class AirPricingGroupRepository
 * @package App\Repositories
 */
class AirPricingGroupRepository extends AirAvailRepository
{
    /**
     * @var string
     */
    protected $tagName = "AirPricingGroups";

    /**
     * @var string
     */
    protected $key = "PricingGroupID";

}