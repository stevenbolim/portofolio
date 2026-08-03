<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->post('/contact/submit', 'Home::submitContact');
$routes->post('/chat/ai', 'Home::chatAi');

