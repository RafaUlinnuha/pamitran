<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
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

$routes->get('/', 'Home::index');
$routes->get('logout', 'Auth::logout');
$routes->get('visi_misi', 'Tentang::visi_misi');
$routes->get('tim_pamitran', 'Tentang::tim_pamitran');
$routes->get('Endoskopi_Training_Center', 'Layanan::Endoskopi_Training_Center');
$routes->get('Dental_Training_Center', 'Layanan::Dental_Training_Center');
$routes->get('OSCE_Training_Center', 'Layanan::OSCE_Training_Center');
$routes->get('Pamitran_Publication_Services', 'Layanan::Pamitran_Publication_Services');
$routes->get('Kerjasama_Penelitian', 'Layanan::Kerjasama_Penelitian');
$routes->get('Apotik_Pendidikan', 'Layanan::Apotik_Pendidikan');
$routes->get('Puspa_Day_Care', 'Layanan::Puspa_Day_Care');
$routes->get('Kemoterapi', 'Layanan::Kemoterapi');
$routes->get('Perawatan_Covid', 'Layanan::Perawatan_Covid');
$routes->get('Palliative_Care', 'Layanan::Palliative_Care');
$routes->get('Poliklinik_Infeksi', 'Layanan::Poliklinik_Infeksi');
$routes->get('Pojok_Lansia', 'Layanan::Pojok_Lansia');
$routes->get('Cafe_dan_Restoran', 'Layanan::Cafe_dan_Restoran');
$routes->get('ATM_Center', 'Layanan::ATM_Center');
$routes->get('Laboratorium', 'Layanan::Laboratorium');
$routes->get('Conference_Rooms', 'Layanan::Conference_Rooms');
$routes->get('layanan_publikasi', 'Admin::layanan_publikasi');
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->get('/admin/edit_status/(:num)', 'Admin::edit_status/$1');
$routes->get('/detail_layanan/(:num)', 'Admin::detail_layanan/$1');
$routes->get('/admin/download_bukti_transfer/(:num)', 'Admin::download_bukti_transfer/$1');
$routes->get('/admin/download_paper/(:num)', 'Admin::download_paper/$1');
$routes->get('/admin/delete_layanan/(:num)', 'Admin::delete_layanan/$1');
$routes->delete('/admin/(:num)', 'Admin::delete/$1');
$routes->get('/admin/(:any)', 'Admin::detail/$1');
$routes->match(['get', 'post'], 'edit', 'User::edit');
$routes->match(['get', 'post'], 'registrasi_layanan', 'Layanan::registrasi_layanan');
$routes->match(['get', 'post'], 'change_password', 'ChangePassword::edit');
$routes->match(['get', 'post'], 'register', 'Auth::register', ['filter' => 'AlreadyLoggedIn']);
$routes->match(['get', 'post'], 'login', 'Auth::login', ['filter' => 'AlreadyLoggedIn']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
