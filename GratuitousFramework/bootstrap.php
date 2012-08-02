<?php

/*
 * This file is part of the Gratuitous project package.
 *
 * (c) Kei Sawada <remore.jp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require dirname(__FILE__).'/Components/ClassLoader/ClassLoader.php';

// Call spl_autoload_register()
$loader = new ClassLoader(array('Stub', 'Development', 'Dev', 'Prototype'));
$loader->register();

// Check who calls program and Prepare variables
if (!$argv[0]) {
    $utility = new UtilitySuperGlobals($_SERVER);

} else {
    $utility = new UtilityCLI($argv);
    
}

// Selecting Controller to run
// ** Note that I don't use spl_autoloader() to pick up Controller Class to initiate since if I use autoloader here, 
// ** it may cause critical security issue which any file in Components Folder can be refered from outside.
if ($handle = opendir(dirname(__FILE__).'/Controllers/')){
    while (false !== ($file = readdir($handle))){
        if ($file == $utility->getScriptName()) {
            require dirname(__FILE__).'/Controllers/'.$utility->getScriptName();
            $controllerString = $utility->getScriptNameWithoutExtension()."Controller";
            $controller = new $controllerString();
            $ret = $controller->run();
        }
    }
    if (!$ret) {
        $ret = "error";
    }
    closedir($handle);
}
    
echo $ret;
