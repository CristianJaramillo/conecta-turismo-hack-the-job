<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 12/06/2019
 * Time: 08:54 PM
 */

namespace App\Facades;


use App\Repositories\AirPricingSolutionRepository;
use Illuminate\Support\Facades\Facade;

class AirPricingSolutionFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return AirPricingSolutionRepository::class;
    }
}