<?php

class Autoloader
{
    public static function ClassLoader(string $className)
    {
        $filePath = __DIR__ . "/lib/classes/$className.php";

        if (is_readable($filePath)) {
            require $filePath;
        }
    }
}

spl_autoload_register('Autoloader::ClassLoader');
