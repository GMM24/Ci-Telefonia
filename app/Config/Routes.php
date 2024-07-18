<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Menu::index');
$routes->get('ver_planes', 'Planes::index');
$routes->get('ver_clientes', 'Clientes::index');
$routes->get('ver_lineatelefonica', 'LineasTelefonicas::index');

$routes->get('clientes', 'ClientesController::index');
$routes->post('agregar_cliente', 'ClientesController::agregarCliente');
$routes->get('nuevo_clientes', 'ClientesController::nuevoCliente');

//return redirect()->route('planes');
//(planes es la ruta a la que que queremos redireccionando)