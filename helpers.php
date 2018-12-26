<?php

function view($name, array $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}

function redirect($location)
{
    header("Location: /${location}");
}