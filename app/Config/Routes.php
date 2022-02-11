<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::index');
// $routes->get('/dashboard', 'Dashboard::index', ['filter' => 'login']);
// $routes->group('Anggota', ['filter' => 'login'], function($routes) {
//     $routes->get('/Anggota', 'Anggota::index');
//     $routes->get('/Anggota/tambah', 'Anggota::tambah');
// 		$routes->post('add', 'Anggota::save');
// });

// dashboard
$routes->get('/Dashboard', 'Dashboard::index', ['filter' => 'login','user']);
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'login','user']);

// user
$routes->get('/User', 'User::index', ['filter' => 'login','user']);
$routes->get('/User/tambah', 'User::tambah', ['filter' => 'login']);

// anggota
$routes->get('/Anggota', 'Anggota::index', ['filter' => 'login']);
$routes->get('/Anggota/index', 'Anggota::index', ['filter' => 'login']);
$routes->get('/Anggota/tambah', 'Anggota::tambah', ['filter' => 'login']);
// proker
$routes->get('/Proker', 'Proker::index', ['filter' => 'login']);
$routes->get('/Proker/index', 'Proker::index', ['filter' => 'login']);
$routes->get('/Proker/tambah', 'Proker::tambah', ['filter' => 'login']);
// dokumen
$routes->get('/Dokumen', 'Dokumen::index', ['filter' => 'login']);
$routes->get('/Dokumen/index', 'Dokumen::index', ['filter' => 'login']);
$routes->get('/Dokumen/tambah', 'Dokumen::tambah', ['filter' => 'login']);
// Laporan
$routes->get('/Laporan', 'Laporan::index', ['filter' => 'login']);
$routes->get('/Laporan/index', 'Laporan::index', ['filter' => 'login']);
// arsip 
$routes->get('/Arsip_anggota', 'Arsip_anggota::index', ['filter' => 'login']);
$routes->get('/Arsip_dokumen', 'Arsip_dokumen::index', ['filter' => 'login']);
// informasi
$routes->get('/Informasi', 'Informasi::index', ['filter' => 'login']);
$routes->get('/Informasi/Aplikasi', 'Informasi::Aplikasi', ['filter' => 'login']);
$routes->get('/Informasi/Struktur', 'Informasi::Struktur', ['filter' => 'login']);



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
