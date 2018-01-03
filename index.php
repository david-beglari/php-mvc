<?php

require 'vendor/autoload.php';
require 'function.php';

$query = require 'core/bootstrap.php';

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());