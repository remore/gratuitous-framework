<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include(dirname(__FILE__).'/../ClassLoader.php');

class ClassLoaderTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        // FIX ME
    }

    // FIX ME
    public function testLoadClass()
    {
        $loader = new ClassLoader();
        $loader->register();
        $this->assertEquals(true, class_exists("Controller"));
        $this->assertEquals(false, class_exists("MyController"));
    }
    
}

?>