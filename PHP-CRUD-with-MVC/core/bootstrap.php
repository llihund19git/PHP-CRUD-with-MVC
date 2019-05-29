<?php

use Core\Database\QueryBuilder;
use Core\Database\DatabaseConnection;
use Core\Router;
use Core\App;

require 'core/Helper.php';
require 'web.php';

App::bind('database', new QueryBuilder(DatabaseConnection::connect()));
