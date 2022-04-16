<?php

function myAutoloader($className)
{
    // Replace backslash with normal slash
    $formattedClassName = str_replace('\\', '/', $className);

    $filename = __DIR__ . '/' . $formattedClassName . '.php';
    if (file_exists($filename)) {
        include $filename;
    }
}

spl_autoload_register('myAutoloader');
