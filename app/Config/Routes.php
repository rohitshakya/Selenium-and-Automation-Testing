<?php namespace Config;
// Create a new instance of our RouteCollection class.
$routes = Services::routes();
// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}
/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Publicmodule');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
//$routes->set404Override('Custom404');
$routes->set404Override('App\Errors::show404');
$routes->set404Override(function(){ echo view('publicview/error_404.php');});
$routes->setAutoRoute(true);


/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Publicmodule::index');
//$routes->get('about', 'Home::about');
//WEB ROUTES
$routes->get('ebook', 'Publicmodule::Ebooks');
$routes->get('registeraccount', 'Publicmodule::Createaccount');

//User Acitvity
$routes->get('dashboard', 'Publicmodule::Userdashboard');
$routes->get('account', 'Publicmodule::Userdashboard');
$routes->get('profile', 'Publicmodule::Userprofile');
$routes->get('report', 'Publicmodule::Userreport');
$routes->get('user-notification(/:num)?', 'Publicmodule::UserNotification');
$routes->post('loginaccount', 'Publicmodule::Checkaccount');
$routes->get('logout', 'Publicmodule::Getout');
$routes->get('forgot-password', 'Publicmodule::Forgotpassword');
$routes->get('reset-password', 'Publicmodule::Resetpassword');
$routes->get('resetmypassword', 'Publicmodule::Resetmypassword');
$routes->get('verify-reg', 'Publicmodule::verifyCrmAccount');

//THEME ROUTES
$routes->get('theme-months/(:any)', 'Publicmodule::Monthslist/$1');
$routes->get('theme/(:any)', 'Publicmodule::Modulelist/$1');
$routes->get('theme/(:any)/(:any)', 'Publicmodule::Modulelist/$1/$1');
$routes->get('theme/(:any)/(:any)/(:any)', 'Publicmodule::Modulelist/$1/$1/$1');
$routes->get('theme-subjects/(:any)/(:any)', 'Publicmodule::Subjectlist/$1/$1');
$routes->get('theme-category/(:any)/(:any)', 'Publicmodule::Searistopicslist/$1/$1');
$routes->get('theme-topic-category/(:any)/(:any)', 'Publicmodule::Topicscategorylist/$1/$1');
$routes->get('theme-expired', 'Publicmodule::Expired');
$routes->get('theme-temporarily-unavailable', 'Publicmodule::Temporarily');

$routes->get('seriestopics/(:any)', 'Publicmodule::Searistopicslist/$1/');
$routes->get('topicscategory/(:any)', 'Publicmodule::Topicscategorylist/$1/');
$routes->get('getactivitytype', 'Publicmodule::Typesofactivity');

//OTHER PAGE ROUTES
$routes->get('privacy-policy', 'Publicmodule::Privacypolicy');
$routes->get('terms-of-service', 'Publicmodule::Termsofservice');
$routes->get('refund-policy', 'Publicmodule::Refundpolicy');
$routes->get('about-us', 'Publicmodule::Aboutus');
$routes->get('contact-us', 'Publicmodule::Contactus');
$routes->get('volt-package', 'Publicmodule::Voltpackage');
$routes->get('book-a-demo', 'Publicmodule::Bookademo');

$routes->get('testimonials', 'Publicmodule::Testimonials');
$routes->get('gallery', 'Publicmodule::Gallery');
$routes->get('team', 'Publicmodule::Team');
$routes->get('academic-team', 'Publicmodule::Instructors');
$routes->get('instructors', 'Publicmodule::Instructors');



//New Desgin Acitvity

$routes->get('activity/(:any)/(:any)', 'Publicmodule::Mcqactivity/$1/$1');
$routes->get('practice/(:any)/(:any)', 'Publicmodule::Mcqactivity/$1/$1');
$routes->get('assesment/(:any)/(:any)', 'Publicmodule::Mcqactivity/$1/$1');


$routes->get('playactivity/(:any)/(:any)/', 'Publicmodule::newactivity/$1/$1');
$routes->get('playgame/(:any)/(:any)', 'Publicmodule::playgame/$1/$1');
$routes->get('playaudio/(:any)/(:any)', 'Publicmodule::listen/$1/$1');



//AFTERLOGIN REDIRECT ROUTES
$routes->get('loginredirect', 'Publicmodule::UserRedirect');
//ADMIN ROUTES
$routes->get('adminlogin', 'Publicmodule::Accessadmin/');
$routes->get('getadmin', 'Publicmodule::Checkadmin/');
$routes->get('out', 'Adminmodule/Getout/');
$routes->get('classlist', 'Adminmodule/Classeslist/');
$routes->get('subjectlist', 'Adminmodule/subjectslist/');
$routes->get('courselist', 'Adminmodule/Courselist/');
$routes->get('userlist', 'Adminmodule/Userslist/');
$routes->get('useredit/(:num)', 'Adminmodule/Usereditform/$1');
$routes->get('updateuserform', 'Adminmodule/Updateuser');
$routes->get('changeuserstatus', 'Adminmodule/Userstatus/');

//API ROUTES
$routes->get('api/signup', 'Publicmodule::Registerapi');
$routes->get('api/login', 'Publicmodule::Loginapi');
$routes->get('api/getotp', 'Publicmodule::Otploginapi');
$routes->get('api/setaccount', 'Publicmodule::Completeaccount');
$routes->match(['get', 'post'], 'api/scorereport', 'Publicmodule::Userscorereport');
$routes->get('api/updateprofile', 'Publicmodule::Profileupdate');






//NEW ROUTES
$routes->get('subject', 'Publicmodule::Subjectlist');
$routes->get('subject/(:any)/(:any)/(:any)/(:any)/(:any)', 'Publicmodule::Categorylist/$1/$1/$1/$1/$1');
$routes->get('subject/(:any)/(:any)/(:any)/(:any)', 'Publicmodule::Chapterlist/$1/$1/$1/$1');
$routes->get('subject/(:any)/(:any)/(:any)', 'Publicmodule::Themelist/$1/$1/$1');
$routes->get('subject/(:any)/(:any)', 'Publicmodule::Firstlevellist/$1/$1');
$routes->get('subject/(:any)', 'Publicmodule::Classlist/$1');



$routes->get('classes/(:any)','Publicmodule::Classlist/$1');
$routes->get('months/(:any)/(:any)','Publicmodule::Monthlist/$1/$1');
$routes->get('modules/(:any)/(:any)','Publicmodule::Moduleslist/$1/$1');
$routes->get('modules/(:any)/(:any)/(:any)','Publicmodule::Moduleslist/$1/$1/$1');
$routes->get('themes/(:any)/(:any)/(:any)/(:any)','Publicmodule::Themelist/$1/$1/$1/$1');
$routes->get('themes/(:any)/(:any)/(:any)','Publicmodule::Themelist/$1/$1/$1/$1');



$routes->get('category/(:any)/(:any)/(:any)/(:any)/(:any)', 'Publicmodule::Categorylist/$1/$1/$1/$1/$1');
$routes->get('category/(:any)/(:any)/(:any)/(:any)', 'Publicmodule::Categorylist/$1/$1/$1/$1');



$routes->get('chapter/(:any)/(:any)/(:any)', 'Publicmodule::Chapterlist/$1/$1/$1/$1');
$routes->get('chapter/(:any)/(:any)/(:any)/(:any)', 'Publicmodule::Chapterlist/$1/$1/$1/$1');


$routes->get('business', 'Publicmodule::Business');
$routes->get('business-registration', 'Publicmodule::Businessregistration');
$routes->get('login', 'Publicmodule::Accountlogin');
$routes->get('registration', 'Publicmodule::Accountregistration');
$routes->get('registration-verification', 'Publicmodule::registrationVerify');

$routes->post('loginckeck', 'Publicmodule::Checkaccount');  




// jrvolt
$routes->get('jr', 'JrMaster::index');
$routes->add('jr/modules/(:any)', 'JrMaster::modules/$i');
$routes->add('jr/activities/(:any)', 'JrMaster::activities/$i');
$routes->add('jr/play/(:any)/(:any)', 'JrMaster::play/$i/$i');
 
// School dashboard  	
// School dashboard  	
$routes->get('school', 'Schoolmodule::index');
$routes->get('school/teacher/list', 'Schoolmodule::teacherlist');
$routes->get('school/student/list', 'Schoolmodule::studentlist');
$routes->get('school/admin/list', 'Schoolmodule::adminlist');
$routes->get('school/class/info', 'Schoolmodule::classlist');
$routes->get('school/info', 'Schoolmodule::instituteinfo');
$routes->get('school/teacher/add', 'Schoolmodule::addteacher');
$routes->post('school/addnewuser', 'Schoolmodule::addnewuser');
$routes->post('school/assignment/add', 'Schoolmodule::addnewassignment');
$routes->post('school/addnewclass', 'Schoolmodule::addnewclass');
$routes->get('school/student/add', 'Schoolmodule::addstudent');
$routes->get('school/admin/add', 'Schoolmodule::addadmin');
$routes->get('school/class/add', 'Schoolmodule::addclass');
$routes->get('school/import/student', 'Schoolmodule::import');
$routes->get('school/import/teacher', 'Schoolmodule::import');
$routes->get('school/student/add', 'Schoolmodule::importstudent');

//Teacher dashboard	
$routes->get('teacher', 'Schoolmodule::teacher_index');
$routes->get('teacher/profile', 'Schoolmodule::teacher_profile');
$routes->get('teacher/period', 'Schoolmodule::teacherclasslist');
$routes->get('teacher/assignment', 'Schoolmodule::createassignment');


//Student dashboard	
$routes->get('student', 'Schoolmodule::student_index');
$routes->get('student/profile', 'Schoolmodule::student_profile');
$routes->get('student/period', 'Schoolmodule::studentclasslist');
$routes->get('student/assignment', 'Schoolmodule::studentassignment');
$routes->get('student/subscription', 'Schoolmodule::studentsubscription');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
