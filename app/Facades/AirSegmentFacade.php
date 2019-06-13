<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 31/05/2019
 * Time: 04:04 PM
 */

namespace App\Facades;


use App\Repositories\AirSegmentRepository;
use Illuminate\Support\Facades\Facade;

class AirSegmentFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return AirSegmentRepository::class;
    }
}