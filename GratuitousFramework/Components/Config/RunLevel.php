<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
final class RunLevel
{
    const PRODUCTION = 1;
    const STAGING = 2;
    const PROTOTYPE = 3;
    
    private static $runLevel;
    
    /**
     * Constructor.
     *
     * @param Numeric $mode Application mode switch
     */
    public function __construct( $runLevel=null )
    {
        if ($runLevel){
            self::$runLevel = $runLevel;
            
        } else {
            if (php_uname('n')=='STAGING-NODE-NAME'){
                self::$runLevel = self::STAGING;
                
            } elseif (php_uname('n')=='PRODUCTION-NODE-NAME'){
                self::$runLevel = self::PRODUCTION;
                
            } else {
            	self::$runLevel = self::PROTOTYPE;
                
            }
        }
    }
    
    /**
     * Returns current application mode
     *
     * @return Numeric Current application mode
     */
    public static function get()
    {
        return self::$runLevel;
    }
    
}
