<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 31/05/2019
 * Time: 09:01 PM
 */

namespace App\Facades;


use App\Repositories\AirItineraryRepository;
use Illuminate\Support\Facades\Facade;

class AirItineraryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AirItineraryRepository::class;
    }

}