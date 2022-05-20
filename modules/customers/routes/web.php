<?php

use Illuminate\Support\Facades\Route;

// Route::namespace('Customers\Http\Controllers')
// ->group(function(){
//     Route::group(['namespace' => 'BackEnd', 'prefix' => buildPrefix('customers', 'backend')], function(){
//         Route::get('customers', 'CustomerController@index');
//     });
// });


$moduleName = basename(dirname(__DIR__, 1));


Route::namespace(buildControllerNamespace($moduleName))->group(function() use ($moduleName){

    Route::namespace('BackEnd')->prefix(buildPrefix($moduleName))->group(function(){
        require 'api.php';
    });
    
    Route::namespace('FrontEnd')->prefix(buildPrefix($moduleName, 'frontend'))->group(function() use ($moduleName){
        
        require 'frontend.php';
    });
});