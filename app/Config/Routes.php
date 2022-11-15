<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Controladores Principales: 

$routes->get('/', 'Home::index');
$routes->get('/Lider_mutacion/index', 'Lider_mutacion::index');
$routes->get('/Director_mutacion/index', 'Director_mutacion::index');
$routes->get('/Analista_juridico/index', 'Analista_juridico::index');
$routes->get('/Analista_cartografico/index', 'Analista_cartografico::index');
$routes->get('/Editor/index', 'Editor::index');
$routes->get('/Tecnico_visitasTerreno/index', 'Tecnico_visitasTerreno::index');
$routes->get('/Analista_Calidad/index', 'Analista_Calidad::index');
$routes->resource('restcontroller',['controller' => 'RestController']);

$routes->group('/', ['namespace' => 'App\Controllers'],function($routes){
    $routes->get('lmutacion/index', 'Lmutacion::index');
});


//Funciones JS

$routes->post('/Lider_mutacion/mostrartab', 'Lider_mutacion::mostrar_tab');
$routes->post('/Director_mutacion/mostrartab', 'Director_mutacion::mostrar_tab');
$routes->post('/Analista_juridico/mostrartab', 'Analista_juridico::mostrar_tab');
$routes->post('/Analista_cartografico/mostrartab', 'Analista_cartografico::mostrar_tab');
$routes->post('/Editor/mostrartab', 'Editor::mostrar_tab');
$routes->post('/Tecnico_visitasTerreno/mostrartab', 'Tecnico_visitasTerreno::mostrar_tab');
$routes->post('/Analista_Calidad/mostrartab', 'Analista_Calidad::mostrar_tab');




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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
