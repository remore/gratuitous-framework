<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include(dirname(__FILE__).'/../UtilitySuperGlobals.php');

class UtilitySuperGlobalsTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        // FIX ME
    }

    public function testRetrieveScriptNameWithGET()
    {
        $_fake_SERVER = array(
            'REQUEST_URI' => '/_privateGit/dbmonitor/Web/testa.php?test=3d',
            'SCRIPT_NAME' => '/_privateGit/dbmonitor/Web/index.php',
        );
        $utility = new UtilitySuperGlobals($_fake_SERVER);
        $this->assertEquals( $utility->getScriptName(), 'testa.php' );
    }
    
    public function testRetrieveScriptNameWithoutGET()
    {
        $_fake_SERVER = array(
            'REQUEST_URI' => '/_privateGit/dbmonitor/Web/testa.php',
            'SCRIPT_NAME' => '/_privateGit/dbmonitor/Web/index.php',
        );
        $utility = new UtilitySuperGlobals($_fake_SERVER);
        $this->assertEquals( $utility->getScriptName(), 'testa.php' );
    }
    
    public function testRetrieveScriptNameWithoutExtension()
    {
        $_fake_SERVER = array(
            'REQUEST_URI' => '/_privateGit/dbmonitor/Web/abc.php?mytest=true',
            'SCRIPT_NAME' => '/_privateGit/dbmonitor/Web/index.php',
        );
        $utility = new UtilitySuperGlobals($_fake_SERVER);
        $this->assertEquals( $utility->getScriptNameWithoutExtension(), 'abc' );
    }
}

?>