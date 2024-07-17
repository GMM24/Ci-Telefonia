<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Menu::index');
$routes->get('ver_planes', 'Planes::index');
$routes->get('ver_clientes', 'Clientes::index');
$routes->get('ver_lineatelefonica', 'LineasTelefonicas::index');