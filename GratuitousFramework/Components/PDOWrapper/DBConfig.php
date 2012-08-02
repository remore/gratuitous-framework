<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
final class DBConfig
{
    public static $dsn;
    public static $username;
    public static $password;
    
    /**
     * Constructor.
     */
    public function __construct()
    {
        if (RunLevel::get()==RunLevel::PRODUCTION){
            self::$dsn = 'mysql:host=PRODUCTION-DB-NODE-NAME;dbname=DBNAME';
            self::$username = 'gazer';
            self::$password = 'gazer!';
            
        } elseif (RunLevel::get()==RunLevel::STAGING){
            self::$dsn = 'mysql:host=STAGING-DB-NODE-NAME;dbname=DBNAME';
            self::$username = 'gazer';
            self::$password = 'gazer!';
        
        } else {
            self::$dsn = 'mysql:host=localhost;dbname=DBNAME';
            self::$username = 'root';
            self::$password = '';
        
        }
    }
    
}
