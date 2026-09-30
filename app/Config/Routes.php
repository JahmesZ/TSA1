<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');        // Welcome  - today's tasks only
$routes->get('tasks', 'Tasks::index');   // Task List - every task
$routes->get('profile', 'Profile::index');
$routes->get('about', 'About::index');
