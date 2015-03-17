<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "products";
$route['404_override'] = '';
$route['p/(:any)'] = "products/p/$1";
$route['edit/(:any)'] = "products/edit/$1";
$route['p/(:any)/(:any)'] ="products/p/$1/$2";
$route['register'] = "users/new_user";
$route['login'] = "sessions/new_session";
$route['logoff'] = "sessions/destroy_session";

//end of routes.php
