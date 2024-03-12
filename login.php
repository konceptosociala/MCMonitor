<?php

include 'vendor/autoload.php';

$templates = new League\Plates\Engine('templates');

$templates->addData(['company' => 'MCMonitor'], 'layout');

echo $templates->render('pages/login');