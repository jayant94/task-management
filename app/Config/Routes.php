<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Auth\Login;
use App\Controllers\UserMangement;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth\Login::index');
$routes->post('login/authenticate', 'Auth\Login::authenticate');
$routes->get('registration', 'Auth\Login::register');
$routes->post('register/store', 'Auth\Login::store');

$routes->get('logout', 'Tasks::logout');
$routes->post('ajax-task-list', 'Ajax::list');
$routes->group('dashboard', function ($routes) {
    $routes->get('/', 'Tasks::index');
    $routes->get('tasks-create', 'Tasks::create');
    $routes->post('tasks-store', 'Tasks::store');
    $routes->get('tasks-edit/(:num)', 'Tasks::edit/$1');
    $routes->post('tasks-update/(:num)', 'Tasks::updateTask/$1');
    $routes->get('tasks-delete/(:num)', 'Tasks::remove/$1');
    
    /** User Management **/
    $routes->get('user/add', 'UserManagement::add');
    $routes->post('user/add', 'UserManagement::add');
    $routes->get('user/remove/(:num)', 'UserManagement::remove/$1');
    $routes->get('user/edit/(:num)', 'UserManagement::edit/$1');
     $routes->post('user/edit/(:num)', 'UserManagement::edit/$1');
    $routes->get('user/index', 'UserManagement::list');
});
