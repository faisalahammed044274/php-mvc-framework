<?php

/**
 * Make the view file
 *
 * @param string $path
 * @param array $data
 *
 * @return void
 * 
 */

function views(string $path, array $data = []): void
{
    //Extract the data array to use each value as variable
    extract($data);

    //Start Output buffering
    require_once VIEWS . '/' . $path;
}

/**
 * Get environment variable data by key
 * 
 * @param string $key
 * @return string
 */

function env(string $key): string
{
    return isset($_ENV[$key]) ? $_ENV[$key] : '';
}
