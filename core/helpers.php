<?php

/**
 * @param $name
 * @param array $data
 * @return string
 */
function view($name, array $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

/**
 * @param $location
 */
function redirect($location)
{
    header("Location: /${location}");
}