<?php

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
$routes = [];
// $route  = str_replace('/backend', '', $_SERVER['REQUEST_URI']);
$route  = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];