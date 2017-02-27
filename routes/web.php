<?php
use mifftah\Listings;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
 */
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/ar-home', 'PagesController@arindex');
Route::get('/agents', 'PagesController@agents'); /* workign and tested */
Route::get('/mortgage', 'PagesController@mortgageCalculator'); /* workign and tested */
Route::get('/affordability', 'PagesController@affordabilityCalculator'); /* working and tested */
Route::get('/rentorbuy', 'PagesController@rentorbuyCalculator'); /* working and tested */
Route::get('/howitwork', 'PagesController@howitwork'); /* working and tested */
Route::get('/support', 'PagesController@support'); /* working and tested */
Route::get('/signleproperty', 'UserController@singleproperty'); /* working and tested */
Route::get('/mailsend', 'PagesController@mailsend');

/*=================================================================================*/
/* search Routes  */
/*=================================================================================*/
Route::any('/search', 'PagesController@searchpro');


/*============================*/
/* front end Logged users */
/*============================*/
Route::get('/user/dashboard', 'UserController@index');
Route::get('/ar-user/dashboard', 'UserController@arindex');
Route::get('/user/agentaccount', 'UserController@agentaccount');
Route::get('/ar-user/agentaccount', 'UserController@aragentaccount');
/** disable Aget account **/
Route::get('/user/agentaccount/disable', 'UserController@userdisable');
/*=================================================================================*/
/* lists  */
/*=================================================================================*/
Route::get('/user/newlist', 'UserController@newlist');
Route::get('/user/newlistupdate/{id}', 'UserController@newlistupdate');
Route::get('/ar-user/newlist', 'UserController@arnewlist');
Route::get('/user/managelist', 'UserController@managelist');
Route::get('/ar-user/managelist', 'UserController@armanagelist');

Route::get('/user/wishlist', 'UserController@wishlist');
Route::get('/user/addtowishlist/{id}', 'UserController@addtowishlist');
Route::get('/ar-user/wishlist', 'UserController@arwishlist');
Route::get('/remove/wishlist/{id}', 'UserController@removewishlist');

Route::get('/home/preview/{id}', 'UserController@homepreview');
Route::get('/ar-home/preview/{id}', 'UserController@arhomepreview');
Route::get('/search/preview/{id}', 'PagesController@homepreview');
Route::post('form/submit/booking/', 'PagesController@postform');
Route::get('/ar-search/preview/{id}', 'PagesController@arhomepreview');
/*============================*/
/* Lists CRUD  */
/*============================*/

Route::post('/user/addlist', 'UserController@addlist');
Route::post('/user/updatelist/{id}', 'UserController@updatelist');

/*=================================================================================*/
/* manage leads / Agents  */
/*=================================================================================*/

Route::get('/user/activeleads', 'UserController@activeleads');
Route::get('/ar-user/activeleads', 'UserController@aractiveleads');
Route::get('/user/deadleads', 'UserController@deadleads');
Route::get('/ar-user/deadleads', 'UserController@ardeadleads');
Route::get('/user/requestsleads', 'UserController@requestsleads');
Route::get('/ar-user/requestsleads', 'UserController@arrequestsleads');
Route::post('/user/leadsedit/{id}', 'UserController@updateleadrequests');
Route::get('/user/requestsleads/send', 'UserController@requestsleadssent');
Route::get('/user/requestsleads/search', 'UserController@requestsleadsearch');
Route::get('/ar-user/requestsleads/search', 'UserController@arrequestsleadsearch');

/*=================================================================================*/
/* manage Owner leads */
/*=================================================================================*/

Route::get('/user/requestsleads/admin', 'UserController@adminLeads');
Route::get('/user/view/profile', 'UserController@viewprofile');
Route::get('/ar-user/view/profile', 'UserController@arviewprofile');

Route::get('/user/edit/profile', 'UserController@editprofile');
Route::post('/user/update/profile', 'UserController@updateprofileUser');
Route::post('/user/update/info', 'UserController@updateinfoUser');


Route::get('/user/changepass', 'UserController@changepassword');
Route::post('/user/updatechangepass', 'UserController@updateChangepassword');
Route::get('/user/transactions', 'UserController@transactions');
Route::get('/user/requestsleads/details', 'UserController@homedetails');


/* ================================================================================================================================================================== */
/* dashboard routes  */
/* ================================================================================================================================================================== */
/* login */
Route::get('admin/login', 'DashLoginController@index');
/* dashboard */
Route::get('/admin/dashboard', 'DashboardController@index');
/* ========================= */
/* update loged in user settings */
/* ========================= */
Route::get('/admin/udatecuser', 'DashboardController@updateUserRecord');

/* Manage users Routes  */
Route::get('admin/getall', 'DashboardController@getall');
Route::get('getsingle/{id}', 'DashboardController@getsingle');
Route::get('admin/updateadmin/{id}', 'DashboardController@getsingle');
Route::get('/admin/searchuser/', 'DashboardController@searchuser');
Route::post('/admin/searchgetuser/', 'DashboardController@getsearchuser');

Route::get('delu/{id}', 'DashboardController@delu');
Route::patch('updateu/{id}', 'DashboardController@updateUser');

/** get all agents **/
Route::get('/admin/searchagents/', 'DashboardController@searcagent');
Route::post('/admin/searchgetAgents/', 'DashboardController@getsearchagent');

Route::get('admin/getallagents', 'DashboardController@getallagents');
/** Lead Routes  **/
Route::get('admin/manageLeads', 'DashboardController@manageLeads');
Route::get('admin/manageAdminLeads', 'DashboardController@manageAdminLeads');
Route::get('admin/addlead', 'DashboardController@addLeads');
Route::get('admin/editlead/{id}', 'DashboardController@editlead');
Route::get('admin/deletelead/{id}', 'DashboardController@delead');
Route::get('ar-admin/deletelead/{id}', 'DashboardController@ardelead');

/** seeding the database **/
Route::get('admin/updateLanguage' , 'DashboardController@updateLanguage');
Route::get('admin/updateLanguagedemo' , 'DashboardController@updateLanguagedemo');
Route::post('admin/storeLanguage' , 'DashboardController@updateLanguageStore');
Route::get('dataseeder', 'UserController@dataseed');

 

 