<?php

$results = $app['database']->selectAll('users');

require 'views/about.view.php';