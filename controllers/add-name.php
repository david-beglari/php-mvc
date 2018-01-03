<?php

$app['database']->insert('users', [
    'first_name' => $_POST['first_name']
]);

redirect('');