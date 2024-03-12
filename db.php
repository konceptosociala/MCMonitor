<?php
    require 'vendor/autoload.php';
    require 'config.php';

    use \RedBeanPHP\R as R;

    R::setup(
        'mysql:host='.$hostname.';dbname='.$dbname,
        $username,
        $password,
    );