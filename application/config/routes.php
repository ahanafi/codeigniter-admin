<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'authentication';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register'] = 'authentication/register';
$route['login'] = 'authentication/index';
$route['logout'] = 'authentication/logout';

