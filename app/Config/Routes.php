<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true); // Aktifkan auto-routing, agar controller dipanggil otomatis

// Route untuk homepage
$routes->get('/', 'Halaman::index');

// Route untuk halaman Admin
$routes->get('/Users', 'Admin\Users::index');

// Route untuk mengecek role
$routes->get('/role/check', 'Admin\Users::check'); // Ganti 'RoleController' dengan 'Admin\Users' sesuai controller
