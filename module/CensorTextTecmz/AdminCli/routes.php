<?php

/* @var \Illuminate\Routing\Router $router */

$router->match(['post'], 'censor_text_tecmz/config', 'ConfigCliController@index');
