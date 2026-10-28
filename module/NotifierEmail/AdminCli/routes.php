<?php

/* @var \Illuminate\Routing\Router $router */

$router->match(['post'], 'notifier_email/config', 'ConfigCliController@index');
