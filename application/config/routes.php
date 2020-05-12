<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users/overview'] = 'users/overview';
//$route['users/view/(:any)'] = 'users/view/$1';
//$route['overview'] = 'users/overview';

//$route['chapters/overview'] = 'chapters/overview';
$route['overview'] = 'chapters/overview';
$route['chapters/(:any)'] = 'chapters/view/$1';

$route['prefs/set'] ='prefs/set';
$route['prefs'] = 'prefs/set';

$route['chapters/complete'] = 'chapters/complete';

$route['default_controller'] = 'pages/view';

//$route['preferences'] = 'preferences/set';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
