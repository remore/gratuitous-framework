<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include(dirname(__FILE__).'/../View.php');

class SampleView extends View
{
    private $filename;
    
    public function __construct($filename)
    {
        $this->filename = dirname(__FILE__).'/'.$filename;
    }
}

class ViewTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        // FIX ME
    }

    // FIX ME
    public function testRender()
    {
        $view = new SampleView('test.html');
        $contents = '<body>Hello world from PHPUnit!</body>';
        
        // FIX ME
        /*
        $this->assertEquals(
            $view->render('<html><?=$contents?></html>', array($contents)),
            '<html><body>Hello world from PHPUnit!</body></html>'
        );
        */
    }
}

?>