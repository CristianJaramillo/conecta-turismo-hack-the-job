<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 30/05/2019
 * Time: 12:16 PM
 */

namespace App\Facades;


use App\Repositories\FlightDetailRepository;
use Illuminate\Support\Facades\Facade;

/**
 * Class FlightDetailFacade
 * @package App\Facades
 */
class FlightDetailFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return FlightDetailRepository::class;
    }
}