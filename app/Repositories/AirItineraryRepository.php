<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 31/05/2019
 * Time: 08:57 PM
 */

namespace App\Repositories;


class AirItineraryRepository extends AirAvailRepository
{

    protected $tagName = "AirItineraries";

    protected $key = "ItineraryID";

}