<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
class UtilitySuperGlobals
{
    private $server;
    
    /**
     * Constructor.
     *
     * @param array $preserved_SERVER SERVER passed super global variable of PHP
     */
    public function __construct($preserved_SERVER)
    {
        $this->server = $preserved_SERVER;
    }
    
    /**
     * Returns script name which is called by user.
     *
     * @return String filename
     */
    public function getScriptName()
    {
        $folder = dirname($this->server["SCRIPT_NAME"]); // ex: /_privateGit/dbmonitor/Web/
        $filenameWithGET = substr($this->server["REQUEST_URI"], strlen($folder)+1); // ex: testa.php?test=3
        
        if (strpos($filenameWithGET, "?")===false){
            return $filenameWithGET;
            
        } else {
            return substr($filenameWithGET, 0, strpos($filenameWithGET, "?"));
        }
    }
    
    /**
     * Returns script name without extension
     *
     * @return String filename without extension
     */
    public function getScriptNameWithoutExtension()
    {
        return substr($this->getScriptName(), 0, strpos($this->getScriptName(), "."));
    }

}
