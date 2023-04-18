<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;


//highlights the selected navigation
if (! function_exists('areActiveRoutesHome')) {
    function areActiveRoutesHome(Array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }

    }
}

?>
