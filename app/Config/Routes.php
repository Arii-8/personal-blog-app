<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Routing antar halaman -> single routes
// $routes->get('/', 'Home::index');


$routes->get('/', 'Pages::index');
$routes->get('info', 'Pages::info');
$routes->get('/contact', 'Pages::contact');
$routes->get('login', 'Auth::index');

// blogpost article (user)
$routes->get('/posting', 'Post::index');
$routes->get('/postdetail/(:segment)', 'Post::viewPost/$1');

// User Site
$routes->get('/user', 'User::index', ['filter' => 'auth']);

// Admin Site
$routes->get('/admin', 'Admin::index', ['filter' => 'auth']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'auth']);

// detail & delete halaman admin
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'auth']);
$routes->get('/admin/deleteProfile/(:num)', 'Admin::deleteProfile/$1', ['filter' => 'auth']);

// blogpost article (admin)
$routes->get('/postList', 'Post_admin::index', ['filter' => 'auth']);
$routes->get('/postDetail', 'Post::viewPost', ['filter' => 'auth']);
$routes->get('/delete/(:segment)', 'Post_admin::delete/$1', ['filter' => 'auth']);
$routes->get('/detail/(:segment)', 'Post_admin::viewPost/$1', ['filter' => 'auth']);
$routes->add('/addPost', 'Post_admin::create', ['filter' => 'auth']);
$routes->add('/edit/(:segment)', 'Post_admin::edit/$1', ['filter' => 'auth']);
$routes->get('/listName', 'Post_admin::image_name', ['filter' => 'auth']);
