<?php

/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */
function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}

/**
 * Redirect to a new page.
 *
 * @param  array $path
 */
function arrayToString($data)
{
    if(!is_array($data)) {
        throw new Exception("Pass a valid array.");
    }
    return implode(',', $data);
}
