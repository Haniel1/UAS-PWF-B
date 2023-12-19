<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Smartphone_view', 'tabel_smartphone::index');
$routes->post('tabel_smartphone/add', 'Tabel_Smartphone::add');
$routes->get('tabel_smartphone/hapus/(:num)', 'tabel_smartphone::hapus/$1');
$routes->get('tabel_smartphone/edit/(:num)', 'tabel_smartphone::edit/$1');
$routes->get('Smartphone_view', 'Tabel_smartphone::index');
$routes->post('tabel_smartphone/update', 'Tabel_Smartphone::update');
$routes->post('tabel_smartphone/hapus', 'Tabel_Smartphone::hapus');

service('auth')->routes($routes);






