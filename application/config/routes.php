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
|	https://codeigniter.com/userguide3/general/routing.html
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
// $route['default_controller'] = 'welcome';


// $route['default_controller'] = 'NumberCheck';
// $route['default_controller'] = 'DivisibilityCheck';
// $route['default_controller'] = 'DayName';
// $route['default_controller'] = 'GradeEvaluator';
// $route['default_controller'] = 'SumNaturalNumbers';
// $route['default_controller'] = 'MultiplicationTable';
// $route['default_controller'] = 'FactorialCalculator';
// $route['default_controller'] = 'FibonacciSeries';
// $route['default_controller'] = 'StudentList';
// $route['default_controller'] = 'fruits';
// $route['default_controller'] = 'StringLength';
// $route['default_controller'] =  'WordCount';
// $route['default_controller'] =  'StringFunctions';
// $route['default_controller'] =  'AnimalController';
// $route['default_controller'] =  'CarController';
// $route['default_controller'] =  'UserFormController';
// $route['default_controller'] =  'ReflectionController';
// $route['default_controller'] = 'user';  // Optional: Set the default controller to 'usercontroller'
// $route['default_controller'] = 'usercontroller';   


// $route['user'] = 'usercontroller';
// $route['usercontroller/save'] = 'usercontroller/save';
// $route['usercontroller/display'] = 'usercontroller/display';

$route['usercontroller'] = 'usercontroller/index';
$route['usercontroller/edit/(:num)'] = 'usercontroller/edit/$1';
$route['usercontroller/update/(:num)'] = 'usercontroller/update/$1';





// This maps 'usercontroller/display' to 'display' method
$route['404_override'] = '';  // Keep this as an empty string
$route['translate_uri_dashes'] = FALSE;  // Keep this as FALSE


//$route['default_controller'] =  'UserController';


//$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;
//$route['user'] = 'usercontroller/index';

//$route['usercontroller/save'] = 'usercontroller/save';
//$route['usercontroller/display'] = 'usercontroller/display';
