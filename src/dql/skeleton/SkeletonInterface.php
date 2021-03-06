<?php

/**
 *
 *  * This is an iumio Power8 component
 *  *
 *  * (c) RAFINA DANY <dany.rafina@iumio.com>
 *  *
 *  * iumio Power8, an iumio component [https://iumio.com]
 *  *
 *  * To get more information about licence, please check the licence file
 *
 */

declare(strict_types=1);

namespace Power8\Dql\Skeleton;

/**
 * Interface SkeletonInterface
 * Declare the CRUD system
 * @package Power8\Dql\Skeleton
 */
interface SkeletonInterface
{

    public function create():bool;
    public function read():object;
    public function update():bool;
    public function delete():bool;

}