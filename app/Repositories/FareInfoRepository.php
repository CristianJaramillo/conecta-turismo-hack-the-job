<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 30/05/2019
 * Time: 12:52 AM
 */

namespace App\Repositories;


class FareInfoRepository extends LowFareSearchRepository
{
    function findAll()
    {
        return parent::findAll()->getElementsByTagName("FareInfo");
    }

}