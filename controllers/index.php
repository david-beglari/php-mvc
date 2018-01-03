<?php

$results = $app['database']->selectAll('users');

require 'views/index.view.php';