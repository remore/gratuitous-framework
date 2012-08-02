<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
class PDOWrapper
{
    private static $instance;
    
    /**
     * Constructor.
     * Note:
     *   This function is set to private in order to prevent others from calling this function. Only this class itself can call this function.
     *   You can find an other example(in Japanese) at http://d.hatena.ne.jp/ja9/20090515/1242374821
     *
     * @param String $dsn      dsn string to connect database
     * @param String $username username to connect
     * @param String $password password to connect
     */
    private function __construct( $dsn, $username, $password )
    {
        self::$instance = new PDO($dsn, $username, $password);
    }
    
    /**
     * Retrive the only instance of this class.
     *
     * @param String $dsn      dsn string to connect database
     * @param String $username username to connect
     * @param String $password password to connect
     * @return Object Instance of this class
     */
    public static function getInstance( $dsn=null, $username=null, $password=null)
    {
        if (is_null(self::$instance)) {
            new self( $dsn, $username, $password );
        }
        return self::$instance;
    }

}
