<?php

use CodeIgniter\Router\RouteCollection;

/**
* @var RouteCollection $routes
*/
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index'); 
$routes->get('/about', 'Home::about'); 
$routes->get('/contact', 'Home::contact'); 


$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::login');

$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::register');

$routes->get('auth/register', 'Auth::register');
$routes->post('auth/register', 'Auth::register');

$routes->get('auth/login', 'Auth::login');
$routes->post('auth/login', 'Auth::login');

$routes->get('/logout', 'Auth::logout');
$routes->get('auth/logout', 'Auth::logout');
$routes->get('/dashboard', 'Auth::dashboard');
$routes->get('auth/dashboard', 'Auth::dashboard');
$routes->get('announcements', 'Announcement::index'); 
$routes->get('dashboard', 'Admin::dashboard');  // Example route
$routes->get('dashboard', 'Teacher::Dashboard');   // Example route
$routes->get('announcements', 'Announcement::index');  // Anyone can access this
$routes->get('admin/dashboard', 'Admin::dashboard');  // Example route
$routes->get('teacher/dashboard', 'Teacher::dashboard');  // Example route





