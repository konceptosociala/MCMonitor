<?php

include '../vendor/autoload.php';

$templates = new League\Plates\Engine('../templates');

$templates->addData(['company' => 'MCMonitor'], 'layout');

echo $templates->render('pages/error', [
    'error' => '403',
    'error_desc' => 'Access forbidden',
]);