<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use Core\{Router, Request};

Router::validate(Request::uri(), Request::method());
