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

namespace Power8\Tests;

use PHPUnit\Framework\TestCase;
use Power8\Dql\Skeleton\DatabaseSkeleton;
use Power8\Dql\Skeleton\TableSkeleton;

/**
 * Class SkeletonTest
 * @package Power8\Tests
 */
class SkeletonTest extends TestCase
{
    public function testObjectCreation():void {
        $dbs = new DatabaseSkeleton();
        $tbs = new TableSkeleton();
        $this->assertInternalType("\Power8\Dql\Skeleton\SkeletonInterface", $dbs);
        $this->assertInternalType("\Power8\Dql\Skeleton\SkeletonInterface", $tbs);
    }
}