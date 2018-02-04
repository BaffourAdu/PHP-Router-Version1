<?php

$database = require 'core/bootstrap.php';

$router = new Router;

//Get URI
$uri =  trim($_SERVER['REQUEST_URI'],'/');

//Load Routes.php file
$router =  Router::load('routes.php');

//Load file associated with URI
require $router->direct($uri);