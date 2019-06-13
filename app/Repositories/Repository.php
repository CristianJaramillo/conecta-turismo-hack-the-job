<?php
/**
 * Created by PhpStorm.
 * User: MB88643
 * Date: 29/05/2019
 * Time: 05:15 PM
 */

namespace App\Repositories;

/**
 * Interface Repository
 * @package App\Repositories
 */
interface Repository
{

    /**
     * @return mixed
     */
    function findAll();

    /**
     * @param $id
     * @return mixed
     */
    function findById($id);

    /**
     * @return int
     */
    function  count() : int;

}