<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include(dirname(__FILE__).'/../UtilityCLI.php');

class UtilityCLITest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        // FIX ME
    }

    public function testRetrieveScriptNameWithGET()
    {
        $_fake_argv = array(
            'script.php',
            'MyPage.php',
            '2',
        );
        $utility = new UtilityCLI($_fake_argv);
        $this->assertEquals( $utility->getScriptName(), 'MyPage.php' );
    }
    
    public function testRetrieveScriptNameWithoutExtension()
    {
        $_fake_argv = array(
            'script.php',
            'MyPage.php',
            '2',
        );
        $utility = new UtilityCLI($_fake_argv);
        $this->assertEquals( $utility->getScriptNameWithoutExtension(), 'MyPage' );
    }
}

?>