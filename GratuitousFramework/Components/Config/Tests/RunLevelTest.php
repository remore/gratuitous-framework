<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include(dirname(__FILE__).'/../RunLevel.php');

class RunLevelContainerTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        // FIX ME
    }

    // FIX ME
    public function testGetRunLevel()
    {
        new RunLevel();
        $this->assertEquals(RunLevel::PROTOTYPE, RunLevel::get());
    }
}

?>