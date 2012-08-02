<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
class UtilityCLI
{
    private $argv;
    
    /**
     * Constructor.
     *
     * @param array $preserved_argv Input parameteres to CLI
     */
    public function __construct($preserved_argv)
    {
        $this->argv = $preserved_argv;
    }
    
    /**
     * Returns script name which is called by user.
     *
     * @return String filename
     */
    public function getScriptName()
    {
        return substr($this->argv[1], strrpos($this->argv[1], DIRECTORY_SEPARATOR));
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
