<?php
require __DIR__ . '/vendor/autoload.php';

use Framework\BlogPostDatabase;
use Framework\Controller;
use Framework\Request;

$request = new Request();
$database = new BlogPostDatabase();

$controller = new Controller();
echo $controller->action($request, $database);