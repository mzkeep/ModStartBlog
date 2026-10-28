<?php

/* @var \Illuminate\Routing\Router $router */

$router->match(['post'], 'blog/config', 'ConfigCliController@index');

$router->match(['post'], 'blog/message/index', 'MessageCliController@index');
$router->match(['post'], 'blog/message/add', 'MessageCliController@add');
$router->match(['post'], 'blog/message/edit', 'MessageCliController@edit');
$router->match(['post'], 'blog/message/delete', 'MessageCliController@delete');

$router->match(['post'], 'blog/index', 'BlogCliController@index');
$router->match(['post'], 'blog/add', 'BlogCliController@add');
$router->match(['post'], 'blog/edit', 'BlogCliController@edit');
$router->match(['post'], 'blog/delete', 'BlogCliController@delete');

$router->match(['post'], 'blog/comment/index', 'CommentCliController@index');
$router->match(['post'], 'blog/comment/add', 'CommentCliController@add');
$router->match(['post'], 'blog/comment/edit', 'CommentCliController@edit');
$router->match(['post'], 'blog/comment/delete', 'CommentCliController@delete');

$router->match(['post'], 'blog/category/index', 'CategoryCliController@index');
$router->match(['post'], 'blog/category/add', 'CategoryCliController@add');
$router->match(['post'], 'blog/category/edit', 'CategoryCliController@edit');
$router->match(['post'], 'blog/category/delete', 'CategoryCliController@delete');
$router->match(['post'], 'blog/category/sort', 'CategoryCliController@sort');
