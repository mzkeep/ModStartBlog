<?php

/* @var \Illuminate\Routing\Router $router */

$router->match(['post'], 'email_smtp/config', 'ConfigCliController@index');
