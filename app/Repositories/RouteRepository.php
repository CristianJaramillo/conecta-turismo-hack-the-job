<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 30/05/2019
 * Time: 11:42 AM
 */

namespace App\Repositories;


class RouteRepository extends LowFareSearchRepository
{
    function findAll()
    {
        return parent::findAll()->getElementsByTagName("Route"); // TODO: Change the autogenerated stub
    }
}