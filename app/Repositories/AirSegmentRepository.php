<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 30/05/2019
 * Time: 12:18 AM
 */

namespace App\Repositories;


class AirSegmentRepository extends LowFareSearchRepository
{
    /**
     * @var string
     */
    protected $tagElement = "AirSegment";

    /**
     * @var string
     */
    protected $key = "Key";

}