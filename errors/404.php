<?php

include '../vendor/autoload.php';

$templates = new League\Plates\Engine('../templates');

$templates->addData(['company' => 'MCMonitor'], 'layout');

echo $templates->render('pages/error', [
    'error' => '404',
    'error_desc' => 'Page not found',
]);