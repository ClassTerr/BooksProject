<?php


function include_service(string $name)
{
    $path = JoinPath(SERVICES_PATH, $name);
    return include_file($path);
}

function include_class(string $name)
{
    $path = JoinPath(CLASSES_PATH, $name) . '.class';
    return include_file($path);
}

function include_file(string $file_name)
{
    $path = $file_name . '.php';
    if (file_exists($path)) {
        include_once($path);
        return true;
    }
    return false;
}