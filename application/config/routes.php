<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'JnpHome';

// '/en' and '/fr' URIs -> use default controller

$route['^en$'] = $route['default_controller'];
$route['^kr$'] = $route['default_controller'];
$route['^vn$'] = $route['default_controller'];


$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;



$route['team-member/(:num)'] = 'team-member/view/$1';
$route['category/(:num)'] = 'category/index/$1';

$route['admin'] = 'admin/login';

$route['products/(:num)'] = 'products/index/$1';

// for product list and product detail
$route['^(en|kr|vn)/danh-sach-san-pham']        = 'Jnp_products';
$route['^(en|kr|vn)/danh-sach-san-pham/(:num)'] = 'Jnp_products/index/$2';

// for about page
$route['^(en|kr|vn)/gioi-thieu'] = 'Jnp_about/index';

// for contact page
$route['^(en|kr|vn)/lien-he'] = 'Jnp_contact/index';

// must be setting at last
$route['^en/(.+)$'] = "$1";
$route['^kr/(.+)$'] = "$1";
$route['^vn/(.+)$'] = "$1";

