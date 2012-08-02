<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
class ClassLoader
{
    private $autoLoadableFiles=array();
    
    /**
     * Constructor.
     *
     * @param Array $stubFolders Folder names to apply spl_autoload_register() process to
     */
    public function __construct($stubFolders=array())
    {
        if ($root = opendir(dirname(__FILE__).'/../')){
            while (false !== ($componentFolder = readdir($root))){
                if (!in_array($componentFolder, array('.', '..'))) {
                    if ($handle = opendir(dirname(__FILE__).'/../'.$componentFolder)){
                        while (false !== ($file = readdir($handle))){
                            if (!in_array($file, array('.','..'))) {
                                foreach($stubFolders as $stubFolder){
                                    if (is_readable(dirname(__FILE__).'/../'.$componentFolder.'/'.$stubFolder.'/'.$file)){
                                        $this->autoLoadableFiles[substr($file, 0, strpos($file, '.'))] = dirname(__FILE__).'/../'.$componentFolder.'/'.$stubFolder.'/'.$file;
                                        break 2;
                                    }
                                }
                                $this->autoLoadableFiles[substr($file, 0, strpos($file, '.'))] = dirname(__FILE__).'/../'.$componentFolder.'/'.$file;
                            }
                        }
                        closedir($handle);
                    }
                }
            }
            closedir($root);
        }
    }
    
    /**
     * Registers this instance as an autoloader.
     */
    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'), true);
    }

    /**
     * Definitions of actual loading process
     *
     * @param String $className Class name to be loaded
     */
    public function loadClass($className)
    {
        if (array_key_exists($className, $this->autoLoadableFiles)) {
            require_once $this->autoLoadableFiles[$className];
            return true;
        }
    }

}
