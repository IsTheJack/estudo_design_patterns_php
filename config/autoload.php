<?php
function autoload($class)
{
    echo $classFile = str_replace('\\', '/', $class) . '.php';
    echo "<br>";
    if (file_exists(CLASS_DIR . $classFile))
        require_once CLASS_DIR . $classFile;
    else
        require_once INTERFACE_DIR . $classFile;
}
spl_autoload_register('autoload');