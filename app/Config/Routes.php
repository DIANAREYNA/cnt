<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'Inicio::index');
$routes->get('/temporada', 'Inicio::temporada');
$routes->get('/prueba', 'Inicio::prueba');
$routes->get('/elencoestable', 'Inicio::elenco');
