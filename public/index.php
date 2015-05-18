<?php

//public/index.php
require_once __DIR__ . '/../bootstrap.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
	'twig.path' => __DIR__ . "/../views"
));

$app->register(new Silex\Provider\SessionServiceProvider());

$app->mount('/', include 'site.php');
$app->mount('/sistema', include 'sistema.php');


$app->run();