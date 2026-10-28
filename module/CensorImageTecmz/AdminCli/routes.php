<?php

/* @var \Illuminate\Routing\Router $router */

$router->match(['post'], 'censor_image_tecmz/config', 'ConfigCliController@index');
