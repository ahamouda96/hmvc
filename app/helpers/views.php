<?php

if (! function_exists('loadViewsFrom')) {
    function loadViewsFrom(string $moduleName, $path)
    {
        return view($moduleName . '::' . $path);
        return $moduleName . '::' . $path;
    }
}

if (! function_exists('loadResourceFrom')) {
    function loadResourceFrom(string $moduleName, $path)
    {
        return $moduleName . '::' . $path;
    }
}