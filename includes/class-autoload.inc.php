<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $path = 'classes/';
    $extension = '.class.php';
    $fileName = $path.$className.$extension;

    if(!file_exists($fileName))
    {
        return false;
    }
    
    include_once $fileName;
}

// env.php loader
if(file_exists('./env.php')) {
    include './env.php';
}

// Define env() function
if(!function_exists('env')) {
    function env($key, $default = null)
    {
        // Get vaule of environmental variable.
        $value = getenv($key);

        if ($value === false) {
            return $default;
        }

        return $value;
    }
}

?>