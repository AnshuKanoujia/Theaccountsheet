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
$route['default_controller'] = 'welcome';
$route['add_feedback'] = 'welcome/add_feedback';
$route['add_enquiry'] = 'welcome/add_enquiry';
$route['create_pdf'] = 'welcome/create_pdf';
$route['new_pdf/(:any)'] = 'welcome/new_pdf/$1';
$route['create_protfolio'] = 'welcome/create_protfolio';
$route['new_protfolio/(:any)'] = 'welcome/new_protfolio/$1';
$route['create_profile'] = 'welcome/create_profile';
//$route['new_profile/(:any)'] = 'welcome/new_profile/$1';
$route['profile_register'] = 'welcome/profile_register';
$route['profile_login'] = 'welcome/profile_login';
$route['update_intro'] = 'welcome/update_intro';

//Admin Controller

$route['admin'] = 'Admin_Welcome/admin';
$route['login'] = 'Admin_Welcome/login';
$route['portfolio'] = 'Admin_Welcome/portfolio';
$route['profile'] = 'Admin_Welcome/profile';
$route['add_education'] = 'Admin_Welcome/add_education';
//$route['update_intro'] = 'Admin_Welcome/update_intro'; 
$route['add_experience'] = 'Admin_Welcome/add_experience';
$route['add_skill'] = 'Admin_Welcome/add_skill';
$route['view_profile'] = 'Admin_Welcome/view_profile';
$route['preview_profile'] = 'Admin_Welcome/preview_profile';
$route['view_profile/(:any)'] = 'Admin_Welcome/view_profile/$1';
$route['preview_profile/(:any)'] = 'Admin_Welcome/preview_profile/$1';
$route['admin_login'] = 'Admin_Welcome/admin_login';
$route['logout'] = 'Admin_Welcome/logout';
$route['add_resume'] = 'Admin_Welcome/add_resume';
$route['show_job'] = 'Admin_Welcome/show_job';
$route['detete_job/(:any)'] = 'Admin_Welcome/detete_job/$1';
$route['edit_job/(:any)'] = 'Admin_Welcome/edit_job/$1';
$route['update_job'] = 'Admin_Welcome/update_job';
$route['students'] = 'Admin_Welcome/students';
$route['delete_students/(:any)'] = 'Admin_Welcome/delete_students/$1';
$route['edit_students/(:any)'] = 'Admin_Welcome/edit_students/$1';
$route['update_students'] = 'Admin_Welcome/update_students';
$route['add_menu'] = 'Admin_Welcome/menu';
$route['menus'] = 'Admin_Welcome/menus';
$route['detete_menu/(:any)'] = 'Admin_Welcome/detete_menu/$1';
$route['edit_menus/(:any)'] = 'Admin_Welcome/edit_menus/$1';
$route['update_menus'] = 'Admin_Welcome/update_menus';
$route['add_content'] = 'Admin_Welcome/content';
$route['contents'] = 'Admin_Welcome/contents';
$route['detete_content/(:any)'] = 'Admin_Welcome/detete_content/$1';
$route['edit_content/(:any)'] = 'Admin_Welcome/edit_content/$1';
$route['update_content'] = 'Admin_Welcome/update_content';
$route['setting'] = 'Admin_Welcome/setting';
$route['edit_setting/(:any)'] = 'Admin_Welcome/edit_setting/$1';
$route['update_setting'] = 'Admin_Welcome/update_setting';
$route['add_notice'] = 'Admin_Welcome/add_notice';
$route['notice'] = 'Admin_Welcome/notice';
$route['delete_notice/(:any)'] = 'Admin_Welcome/delete_notice/$1';
$route['edit_notice/(:any)'] = 'Admin_Welcome/edit_notice/$1';
$route['update_notice'] = 'Admin_Welcome/update_notice';
$route['add_video'] = 'Admin_Welcome/add_video';
$route['video'] = 'Admin_Welcome/video';
$route['delete_video/(:any)'] = 'Admin_Welcome/delete_video/$1';
$route['edit_video/(:any)'] = 'Admin_Welcome/edit_video/$1';
$route['update_video'] = 'Admin_Welcome/update_video';
$route['add_specialities'] = 'Admin_Welcome/add_specialities';
$route['specialities'] = 'Admin_Welcome/specialities';
$route['delete_specialities/(:any)'] = 'Admin_Welcome/delete_specialities/$1';
$route['edit_specialities/(:any)'] = 'Admin_Welcome/edit_specialities/$1';
$route['update_specialities'] = 'Admin_Welcome/update_specialities';
$route['add_payment'] = 'Admin_Welcome/add_payment';
$route['payment'] = 'Admin_Welcome/payment';
$route['delete_payment/(:any)'] = 'Admin_Welcome/delete_payment/$1';
$route['edit_payment/(:any)'] = 'Admin_Welcome/edit_payment/$1';
$route['update_payment'] = 'Admin_Welcome/update_payment';
$route['create_pdf'] = 'Admin_Welcome/create_pdf';
$route['detete_education/(:any)'] = 'Admin_Welcome/detete_education/$1';
$route['edit_education/(:any)'] = 'Admin_Welcome/edit_education/$1';
$route['update_education'] = 'Admin_Welcome/update_education';
$route['detete_experience/(:any)'] = 'Admin_Welcome/detete_experience/$1';
$route['edit_experience/(:any)'] = 'Admin_Welcome/edit_experience/$1';
$route['update_experience'] = 'Admin_Welcome/update_experience';
$route['detete_skill/(:any)'] = 'Admin_Welcome/detete_skill/$1';
$route['edit_skill/(:any)'] = 'Admin_Welcome/edit_skill/$1';
$route['update_skill'] = 'Admin_Welcome/update_skill';
$route['detete_location/(:any)'] = 'Admin_Welcome/detete_location/$1';
$route['edit_location/(:any)'] = 'Admin_Welcome/edit_location/$1';
$route['update_location'] = 'Admin_Welcome/update_location';
$route['preview_resume/(:any)'] = 'Admin_Welcome/preview_resume/$1';
$route['preview_portfolio/(:any)'] = 'Admin_Welcome/preview_portfolio/$1';

$route['add_social_media'] = 'Admin_Welcome/add_social_media';
$route['detete_social/(:any)'] = 'Admin_Welcome/detete_social/$1';
$route['edit_social/(:any)'] = 'Admin_Welcome/edit_social/$1';
$route['update_social'] = 'Admin_Welcome/update_social';


$route['new_profile/(:any)'] = 'Admin_Welcome/new_profile/$1';

$route['download_pdf']='Admin_Welcome/download_pdf';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
