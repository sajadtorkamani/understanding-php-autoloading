<?php

class GreeterService
{
    public function greet(string $name): void
    {
        echo "Hello, $name" . PHP_EOL;
    }
}
