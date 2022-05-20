<?php

if(! function_exists('directorySeparator')){
    function directorySeparator()
    {
        return DIRECTORY_SEPARATOR;
    }   
}

if(! function_exists('getModuleName')){
    function getModuleName(string $moduleName)
    {
        return base_path('modules' . directorySeparator() . $moduleName . directorySeparator());
    }
}

// 
if(! function_exists('loadEntity')){
    function loadEntity(string $fileName, string $parentDir, string $moduleName)
    {
        return getModuleName($moduleName) . $parentDir . directorySeparator() . $fileName;
    }
}

