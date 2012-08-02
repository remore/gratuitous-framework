<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include(dirname(__FILE__).'/../DBConfig.php');
include(dirname(__FILE__).'/../PDOWrapper.php');

class PDOWrapperTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        // FIX ME
    }

    // FIX ME
    public function testDBConnect()
    {
        new DBConfig();
        $pdo = PDOWrapper::getInstance(DBConfig::$dsn, DBConfig::$username, DBConfig::$password);
        $this->assertEquals(true, $pdo instanceOf PDO);
    }
}

?>