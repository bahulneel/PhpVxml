<?php
error_reporting(-1);

date_default_timezone_set('Europe/London');

function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    $filePath = __DIR__ . '/../library/' . $fileName;
    if (!file_exists($filePath)) {
    	throw new Exception($filePath . ' Not Found');
    }
    require $filePath;
}

spl_autoload_register('autoload');
