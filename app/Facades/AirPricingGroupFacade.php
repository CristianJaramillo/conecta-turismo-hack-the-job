<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 31/05/2019
 * Time: 12:20 PM
 */

namespace App\Facades;


use App\Repositories\AirPricingGroupRepository;
use Illuminate\Support\Facades\Facade;

class AirPricingGroupFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AirPricingGroupRepository::class;
    }

}