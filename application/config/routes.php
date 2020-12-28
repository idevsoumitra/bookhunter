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

// Welcome Controller 

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['fetch_name'] = "Welcome/fetch_book";
$route['fetch_author'] = "Welcome/fetch_author";
$route['search-filter'] = "Welcome/getSearch";

$route['blog'] = "Welcome/blog";
$route['upcoming'] = "Welcome/upcoming";

$route['view-book/(.+)'] = 'Welcome/view_book_info/$1';
$route['view-book-action/(.+)'] = 'Welcome/view_book_action/$1';

$route['category'] = 'Welcome/category';
$route['category-list/(.+)'] = 'Welcome/category_by_book/$1';

$route['contact'] = 'Welcome/contact_form';
$route['send-contact'] = 'Welcome/send_contact';




// $route['view-book-info/(.*)'] = 'Welcome/view_book_info/$1'; 

// Admin Controller

$route['admin-login'] = 'admin/admin_login';
$route['logout'] = 'admin/logout';

$route['manage-book'] = 'admin/manage_book';
$route['manage-user'] = 'admin/manage_user';
$route['add-admin'] = 'admin/add_admin';
$route['dashboard'] = 'admin/dashboard';
$route['message-box'] = 'admin/message_box';


$route['edit-book/(.+)'] = 'admin/edit_book/$1'; 
$route['update-book'] = 'admin/update_book';

$route['delete-book/(.+)'] = 'admin/delete_book/$1';


// save admin
$route['save-admin'] = 'admin/save_admin';
$route['manage-admin'] = 'admin/manage_admin';


// User Controller//////////////////////////////////////////
$route['user-register'] = 'User_controller/user_register';


$route['user-login'] = 'User_controller/user_login';
$route['user-logout'] = 'User_controller/user_logout';


$route['user_id/(.+)'] = 'User_controller/view_profile/$1';


// $route['view-profile'] = 'User_controller/view_profile';
$route['add-book'] = 'User_controller/add_book'; //view

$route['upload-book'] = 'User_controller/upload_book'; //upload book info 

$route['save-review'] = "User_controller/save_review"; // Review System

$route['edit-book-info/(.+)'] = 'User_controller/edit_book_info/$1'; //edit book by user
$route['update-book-info'] = 'User_controller/update_book_info'; //edit book by user

$route['edit-user-profile'] = 'User_controller/edit_user_profile'; //edit book by user
$route['user-dp-edit'] = 'User_controller/edit_user_dp'; //edit book by user

$route['delete-book-user/(.+)'] = 'User_controller/delete_book_user/$1'; //edit book by user







