<?php

if (! function_exists('buildPrefix')) {
    function buildPrefix(string $moduleName, string $type = "backend")
    {
        return config($moduleName . '.prefix.backend', config('modules.prefix.' . $type)).'/'.config($moduleName . '.moduleNAme');
    }
}


if (! function_exists('buildControllerNamespace')) {
    function buildControllerNamespace(string $moduleName)
    {
      return ucfirst($moduleName) .'\Http\Controllers';
    }
}