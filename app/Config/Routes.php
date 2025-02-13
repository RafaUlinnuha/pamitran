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
$routes->setTranslateURIDashes(true);
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
$routes->get('visi-misi', 'Tentang::visi_misi');
$routes->get('tim-pamitran', 'Tentang::tim_pamitran');
$routes->get('endoskopi-training-center', 'Layanan::Endoskopi_Training_Center');
$routes->get('dental-training-center', 'Layanan::Dental_Training_Center');
$routes->get('osce-training-center', 'Layanan::OSCE_Training_Center');
$routes->get('pamitran-publication-services', 'Layanan::Pamitran_Publication_Services');
$routes->get('kerjasama-penelitian', 'Layanan::Kerjasama_Penelitian');
$routes->get('apotik-pendidikan', 'Layanan::Apotik_Pendidikan');
$routes->get('puspa-daycare', 'Layanan::Puspa_Day_Care');
$routes->get('kemoterapi', 'Layanan::Kemoterapi');
$routes->get('perawatan-covid', 'Layanan::Perawatan_Covid');
$routes->get('palliative-care', 'Layanan::Palliative_Care');
$routes->get('poliklinik-infeksi', 'Layanan::Poliklinik_Infeksi');
$routes->get('pojok-lansia', 'Layanan::Pojok_Lansia');
$routes->get('cafe-dan-restoran', 'Layanan::Cafe_dan_Restoran');
$routes->get('atm-center', 'Layanan::ATM_Center');
$routes->get('laboratorium', 'Layanan::Laboratorium');
$routes->get('conference-room', 'Layanan::Conference_Room');
$routes->get('layanan-publikasi', 'Admin::layanan_publikasi');
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->get('/admin/edit-status/(:num)', 'Admin::edit_status/$1');
$routes->get('/detail-layanan/(:num)', 'Admin::detail_layanan/$1');
$routes->get('/admin/download-bukti-transfer/(:num)', 'Admin::download_bukti_transfer/$1');
$routes->get('/admin/download-paper/(:num)', 'Admin::download_paper/$1');
$routes->get('/admin/delete-layanan/(:num)', 'Admin::delete_layanan/$1');
$routes->delete('/admin/(:num)', 'Admin::delete/$1');
$routes->get('/admin/(:any)', 'Admin::detail/$1');
$routes->match(['get', 'post'], 'edit', 'User::edit');
$routes->match(['get', 'post'], 'registrasi-layanan', 'Layanan::registrasi_layanan');
$routes->match(['get', 'post'], 'change-password', 'ChangePassword::edit');
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
