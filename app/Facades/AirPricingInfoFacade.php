<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 13/06/2019
 * Time: 12:11 AM
 */

namespace App\Facades;


use App\Repositories\AirPricingInfoRepository;
use Illuminate\Support\Facades\Facade;

class AirPricingInfoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AirPricingInfoRepository::class;
    }
}