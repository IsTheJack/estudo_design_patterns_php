<?php
function autoload($class)
{
    echo $classFile = str_replace('\\', '/', $class) . '.php';
    if (file_exists(CLASS_DIR . $classFile))
        require_once CLASS_DIR . $classFile;
    else if (file_exists(INTERFACE_DIR . $classFile))
        require_once INTERFACE_DIR . $classFile;
}
spl_autoload_register('autoload');