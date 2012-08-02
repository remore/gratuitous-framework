<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
class View
{
    private $filename;
    
    /**
     * Constructor.
     *
     * @param String $filename A file path to render as a view
     */
    public function __construct($filename)
    {
        // FIX ME
        //$this->filename = dirname(__FILE__).''.$filename;
    }
    
    /**
     * Renders a view
     *
     * @param array $params Para
     */
    protected function render()
    {
        return 'There is no implementation yet:)';
    }

}
