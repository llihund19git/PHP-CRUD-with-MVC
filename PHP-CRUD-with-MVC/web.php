<?php

use Core\Router;

Router::get('/', 'UsersController@index');
Router::post('/store', 'UsersController@store');
Router::get('/edit', 'UsersController@edit');
Router::post('/edit', 'UsersController@update');
Router::delete('/store', 'UsersController@delete');