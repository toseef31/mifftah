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
Route::get('/user/agentaccount', 'UserController@agentaccount');
/** disable Aget account **/
Route::get('/user/agentaccount/disable', 'UserController@userdisable');
/*=================================================================================*/
/* lists  */
/*=================================================================================*/
Route::get('/user/newlist', 'UserController@newlist');
Route::get('/user/managelist', 'UserController@managelist');
Route::get('/user/wishlist', 'UserController@wishlist');
Route::get('/remove/wishlist/{id}', 'UserController@removewishlist');
Route::get('/home/preview/{id}', 'UserController@homepreview');
Route::get('/search/preview/{id}', 'PagesController@homepreview');
/*============================*/
/* Lists CRUD  */
/*============================*/

Route::post('/user/addlist', 'UserController@addlist');

/*=================================================================================*/
/* manage leads / Agents  */
/*=================================================================================*/

Route::get('/user/activeleads', 'UserController@activeleads');
Route::get('/user/deadleads', 'UserController@deadleads');
Route::get('/user/requestsleads', 'UserController@requestsleads');
Route::post('/user/leadsedit/{id}', 'UserController@updateleadrequests');
Route::get('/user/requestsleads/send', 'UserController@requestsleadssent');
Route::get('/user/requestsleads/search', 'UserController@requestsleadsearch');



/*=================================================================================*/
/* manage Owner leads */
/*=================================================================================*/

Route::get('/user/requestsleads/admin', 'UserController@adminLeads');
Route::get('/user/view/profile', 'UserController@viewprofile');

Route::get('/user/edit/profile', 'UserController@editprofile');
Route::post('/user/update/profile', 'UserController@updateprofileUser');
Route::post('/user/update/info', 'UserController@updateinfoUser');


Route::get('/user/changepass', 'UserController@changepassword');
Route::get('/user/transactions', 'UserController@transactions');
Route::get('/user/requestsleads/details', 'UserController@homedetails');

/*=================================================================================*/
/* faker for seeding listing  */
/*=================================================================================*/
Route::get('seed/listing', function () {
	$faker = Faker\Factory::create();
	$data = [];
	$data['housetype'] = [0 => 'Single Family', 1 => 'Multi Family', 2 => 'Apartment', 3 => 'Vacant Land', 4 => 'apartamente', 5 => 'Pocket Listings', 6 => 'Farm'];
	$data['architect'] = [0 => 'Colonial', 1 => 'Contemporary', 2 => 'Modern', 3 => 'Medieval'];
	$data['lott'] = [0 => 'acer', 1 => 'squ'];
	$data['floor'] = [0 => 'tile', 1 => 'carpet', 2 => 'hardwood', 3 => 'concrete', 4 => 'granite', 5 => 'marbel'];
	$data['gerage'] = [0 => 'Garage Attached', 1 => 'Garage Detached', 2 => 'On Street Parking', 3 => 'Off Street Parking'];
	$data['view'] = [0 => 'City View', 1 => 'Mountain View', 2 => 'Water View', 3 => 'Park View', 4 => 'Building View'];
	
	for ($i = 0; $i <= 500; $i++) {
		$housetype = rand(0, 6);
		$architect = rand(0, 3);
		$lott = rand(0, 1);
		$floor = rand(0, 5);
		$gerage = rand(0, 3);
		$view = rand(0, 4);
		
		$rec = [
			'type' => rand(1, 2),
			'name' => 'property ' . rand(1, 1000) . 'with ' . rand(200, 700) . ' family ' . rand(4000, 6000),
			'postedBy' => rand(1, 2),
			'longitude' => $faker->latitude,
			'latitude' => $faker->longitude,
			'region' => 'Dubai ' . $faker->city,
			'street' => $faker->streetAddress,
			'homesize' => rand(3000, 9000),
			'pincode' => $faker->postcode,
			'price' => rand(10000, 200000),
			'availability' => rand(0, 1),
			'hometype' => $data['housetype'][$housetype],
			'info' => $faker->sentence,
			'architecturalmodel' => $data['architect'][$architect],
			'yearbuilt' => $faker->date('y-m-d'),
			'yearmodified' => $faker->date('y-m-d'),
			'lottype' => $data['lott'][$lott],
			'stories' => rand(0, 10),
			'forclosure' => rand(0, 1),
			'otherrentdetail' => $faker->sentence,
			'videolink' => $faker->url,
			'beds' => rand(0, 10),
			'bathrooms' => rand(0, 10),
			'opendate' => $faker->date(),
			'starttime' => $faker->time(),
			'endtime' => $faker->time(),
			'office' => rand(0, 1),
			'dinning' => rand(0, 1),
			'family' => rand(0, 1),
			'living' => rand(0, 1),
			'guest' => rand(0, 1),
			'kitchen' => rand(0, 1),
			'cabelTv' => rand(0, 1),
			'fans' => rand(0, 1),
			'internet' => rand(0, 1),
			'securitysys' => rand(0, 1),
			'wifi' => rand(0, 1),
			'balcony' => rand(0, 1),
			'pool' => rand(0, 1),
			'lawn' => rand(0, 1),
			'garden' => rand(0, 1),
			'fence' => rand(0, 1),
			'gym' => rand(0, 1),
			'floortye' => $data['floor'][$floor],
			'aircondition' => rand(0, 1),
			'heater' => rand(0, 1),
			'naturalAir' => rand(0, 1),
			'garagetype' => $data['gerage'][$gerage],
			'buildingview' => $data['view'][$view],
		];
		break;
//		return $data;
		Listings::create($rec);
	}
});

/* ================================================================================= */
/* dashboard routes  */
/* ================================================================================= */
/* login */
Route::get('admin/login', 'DashLoginController@index');
/**  **/
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
 