<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Home Controller
$route['default_controller'] = 'home';
$route['about'] = 'home/about';
$route['partners'] = 'home/partners';
$route['products'] = 'home/products';
$route['services'] = 'home/services';
$route['contact'] = 'home/contact';


$route['404_override'] = 'errors';
$route['translate_uri_dashes'] = FALSE;

