<?php
namespace mifftah\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use mifftah\booking;
use mifftah\Languages;
use mifftah\Listings;
use mifftah\Msg;
use mifftah\Translation;
use mifftah\Userinfo;
use mifftah\User;
use mifftah\Wishlist;
use mifftah\Images;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\Routing\Route;

class UserController extends Controller {
	
	public function __construct() {
		$this->middleware('auth');
	}
	public function userdisable() {
		if (Auth::check()) {
			$data = User::findOrFail(Auth::user()->id);
			if ($data->status == 0) {
				User::where('id', Auth::user()->id)->update(['status' => 1]);
				return back();
			} elseif ($data->status == 1) {
				User::where('id', Auth::user()->id)->update(['status' => 0]);
				return back();
			}
		} else {
			return back();
		}
		
	}
	
	
	public function index() {
		$data = User::whereId(Auth::user()->id)->get()->first();
		$info = Userinfo::where('userID', Auth::user()->id)->get()->first();
		$wishlist = Wishlist::where('userID', Auth::user()->id)->get()->toArray();
		$listing = Listings::where('postedBy', Auth::user()->id)->where('status', 1)->get();
		$inactivelisting = Listings::where('postedBy', Auth::user()->id)->where('status', 0)->count();
		return view('dashboardUser.userDashboard_dashBoard', compact('data', 'info', 'wishlist', 'listing', 'inactivelisting'));
		
	}
	
	/*public function arindex() {
		$data = User::whereId(Auth::user()->id)->get()->first();
		$info = Userinfo::where('userID', Auth::user()->id)->get()->first();
		$wishlist = Wishlist::where('userID', Auth::user()->id)->get()->toArray();
		$listing = Listings::where('postedBy', Auth::user()->id)->get()->first();
		return view('ar.dashboardUser.userDashboard_dashBoard', compact('data', 'info', 'wishlist', 'listing'));
		
	}*/
	
	public function agentaccount() {
		$data = User::findOrFail(Auth::user()->id);
		$userinfo = Userinfo::where('userID', Auth::user()->id)->first();
		return view('dashboardUser.userDashboard_agentAccount', compact('data', 'userinfo'));
	}
	
	/*public function aragentaccount() {
		$data = User::findOrFail(Auth::user()->id);
		$userinfo = Userinfo::where('userID', Auth::user()->id)->first();
		return view('ar.dashboardUser.userDashboard_agentAccount', compact('data', 'userinfo'));
	}*/
	
	public function newlist() {
		return view('dashboardUser.userDashboard_newlist');
	}
	
	public function newlistupdate($id) {
		$data = Listings::findOrFail($id);
		return view('dashboardUser.userDashboard_newlistupdate', compact('data'));
	}
	
	/*public function arnewlist() {
		return view('ar.dashboardUser.userDashboard_newlist');
	}*/
	
	public function addlist(Request $request) {
		$request->request->add(['postedBy' => Auth::user()->id]);
		$data = Listings::create($request->all());
		if ($request->hasFile('images')) {
			foreach ($request->file('images') as $image) {
				$extension = $image->getClientOriginalExtension();
				$filename = md5(str_shuffle(time())) . md5(time()) . '.' . $extension;
				$path = public_path('uploads/');
				$image->move($path, $filename);
				Images::create(['name' => $filename, 'userID' => Auth::user()->id, 'listID' => $data['id']]);
			}
		}
		return redirect(url('/user/newlistupdate/' . $data['id']))->with('success', 'Your Listing Have Sucessfully Saved');
	}
	
	public function updatelist(Request $request, $id) {
		$data = Listings::findOrfail($id);
		$data->update($request->all());
		if ($request->hasFile('images')) {
			foreach ($request->file('images') as $image) {
				$extension = $image->getClientOriginalExtension();
				$filename = md5(str_shuffle(time())) . md5(time()) . '.' . $extension;
				$path = public_path('uploads/');
				$image->move($path, $filename);
				Images::create(['name' => $filename, 'userID' => Auth::user()->id, 'listID' => $data['id']]);
			}
		}
		return back()->with('sucess', 'sucessfully updtated');
	}
	
	public function managelist() {
		/** user active leads **/
		$activeLeads = Listings::where('postedBy', Auth::user()->id)->where('availability', 1)->where('status', 1)->paginate(10);
		$inactiveLeads = Listings::where('postedBy', Auth::user()->id)->where('availability', 1)->where('status', 0)->paginate(10);
		return view('dashboardUser.userDashboard_managelist', compact('activeLeads', 'inactiveLeads'));
	}
	
	/*public function armanagelist() {
		$user_mange = Listings::where('postedBy', Auth::user()->id)->paginate(5);
//		return $user_mange;
		return view('ar.dashboardUser.userDashboard_managelist', compact('user_mange'));
	}*/
	
	public function wishlist() {
		$data = Wishlist::where('userID', Auth::user()->id)->get();
		return view('dashboardUser.userDashboard_wishlist', compact('data'));
	}
	
	public function addtowishlist($proID) {
		if (Auth::check()) {
			$data = Wishlist::firstOrCreate(['listid' => $proID, 'userID' => Auth::user()->id]);
			return back();
		} else {
			/** you are not logged in  **/
			return back();
		}
	}
	
	/*public function arwishlist() {
		$user_mange = Wishlist::where('userID', Auth::user()->id)->get()->toArray();
		
		$data = [];
		
		foreach ($user_mange as $item) {
			
			array_push($data, Listings::where('id', $item['listid'])->get()->first());
		}
		return view('ar.dashboardUser.userDashboard_wishlist', compact('data'));
	}*/
	
	public function removewishlist($id) {
		Wishlist::where('userID', Auth::user()->id)->where('listid', $id)->delete();
		return back();
	}
	
	public function homepreview($id) {
		$data = Listings::where('postedBy', Auth::user()->id)->get()->first();
		return view('dashboardUser.userDashboard_homepreview', compact('data'));
	}
	
	/*public function arhomepreview($id) {
		$data = Listings::where('postedBy', Auth::user()->id)->get()->first();
		//echo'<pre>';var_dump( $data );echo'</pre>';
		return view('ar.dashboardUser.userDashboard_homepreview', compact('data'));
	}*/
	
	public function activeleads() {
		$data = Listings::where('availability', 1)->paginate(10);
		return view('dashboardUser.userDashboard_leads_active', compact('data'));
	}
	
	/*public function aractiveleads() {
		$data = Listings::where('availability', 1)->paginate(10);
//	return $data;
		return view('ar.dashboardUser.userDashboard_leads_active', compact('data'));
	}*/
	
	public function deadleads() {
		$data = Listings::where('availability', 0)->paginate(10);
//	return $data;
		return view('dashboardUser.userDashboard_leads_active', compact('data'));
	}
	
	/*public function ardeadleads() {
		$data = Listings::where('availability', 0)->paginate(10);
//	return $data;
		return view('ar.dashboardUser.userDashboard_leads_active', compact('data'));
	}*/
	
	public function requestsleads() {
		$data = booking::where('vendorID', Auth::user()->id)->paginate(30);
		$propertiesID = [];
		foreach ($data as $row) {
			$record = Listings::where('id', $row->propertyID)->get()->toArray();
			if (!empty($record) || null != $record) {
				array_push($propertiesID, $record);
			}
		}
		
		return view('dashboardUser.userDashboard_leads_requests', compact('data', 'propertiesID'));
	}
	
	/*public function arrequestsleads() {
		$data = booking::where('vendorID', Auth::user()->id)->paginate(30);
		$propertiesID = [];
		foreach ($data as $row) {
			$record = Listings::where('id', $row->propertyID)->get()->toArray();
			if (!empty($record) || null != $record) {
				array_push($propertiesID, $record);
			}
		}
		return view('ar.dashboardUser.userDashboard_leads_requests', compact('data', 'propertiesID'));
	}*/
	
	public function requestsleadssent() {
		return view('ar.dashboardUser.userDashboard_leads_requests');
	}
	
	public function requestsleadsearch() {
		return view('dashboardUser.userDashboard_leads_requests_search');
	}
	
	/*public function arrequestsleadsearch() {
		return view('ar.dashboardUser.userDashboard_leads_requests_search');
	}*/
	
	public function adminLeads() {
		return view('dashboardUser.userDashboard_leads_requests_owner');
	}
	
	public function homedetails() {
		return view('dashboardUser.userDashboard_owner_home_details');
	}
	
	
	public function viewprofile() {
		$data['profile'] = User::where('id', Auth::user()->id)->get()->toArray();
		$data['info'] = Userinfo::where('userID', Auth::user()->id)->get()->toArray();
		$data['listings'] = Listings::where('postedBy', Auth::user()->id)->orderBy('id', 'desc')->limit(10)->get();
		return view('dashboardUser.userDashboard_profile_view', compact('data'));
	}
	
	/*public function arviewprofile() {
		$data['profile'] = User::where('id', Auth::user()->id)->get()->toArray();
		$data['info'] = Userinfo::where('userID', Auth::user()->id)->get()->toArray();
//		return $data;
		return view('ar.dashboardUser.userDashboard_profile_view', compact('data'));
	}*/
	
	public function editprofile() {
		$data = User::where('id', Auth::user()->id)->first();
		$listings = Userinfo::where('userID', $data->id)->get();
		return view('dashboardUser.userDashboard_profile_edit', compact('data', 'listings'));
	}
	
	public function updateprofileUser(Request $request) {
		$data = User::where('id', Auth::user()->id)->first();
		$update = $data->update($request->all());
		if ($request->hasFile('img')) {
			$image = $request->file('img');
			$extension = $image->getClientOriginalExtension();
			$filename = md5(str_shuffle(time())) . md5(time()) . '.' . $extension;
			$path = public_path('uploads/');
			$image->move($path, $filename);
			$data->img = $filename;
			$data->save();
		}
		return back();
	}
	
	public function updateinfoUser(Request $request) {
		$data = Userinfo::where('userID', Auth::user()->id)->first();
		if ($data == NULL) {
			/** if data is null then we dont have the row in d **/
			Userinfo::create($request->all());
		} else {
			$request->request->add(['userID' => Auth::user()->id]);
			$data->update($request->all());
		}
		return back();
	}
	
	public function changepassword() {
		return view('dashboardUser.userDashboard_profile_password');
	}
	
	public function updateChangepassword(Request $request) {
		if (Auth::check()) {
			/** then we have a valid user **/
			$this->validate($request, [
				'password' => 'required|min:5|confirmed',
				'password_confirmation' => 'required|min:5',
			]);
			$data = User::where('id', Auth::user()->id)->first();
			$data->update(['password' => bcrypt($request->input('password'))]);
			return back()->with('sucessmessage', 'sucessfully updated');
		} else {
			/** then we dont have a valid user **/
			return back();
		}
	}
	
	public function transactions() {
		return view('dashboardUser.userDashboard_transactions');
	}
	
	public function singleproperty() {
		return view('dashboardUser.userDashboard_singleproperty');
	}
	
	/** update leads  **/
	public function updateleadrequests($id, Request $request) {
//		return $request->all();
		$data = Listings::findOrFail($id);
//		return $data;
		$result = $data->update($request->all());
		if ($result == true) {
			return back();
		} else {
			return "sorry soething went wrong go back and fill out form again";
		}
		
	}
	
	public function dataseed() {
		$dataLevel = [
			'Contact Us ',
			'You can contact us on the below address .',
			'Address',
			'ABC Street Kerala India ',
			'Email',
			'support@inoutscripts . com ',
			'Thank You for Registering with us . Your account is now active .',
			'Successfully Registered ',
			'Your account is currently in Pending Status . Admin will verify and approve it soon .',
			'Look Up Homes to ',
			'The most complete source of homes for buying ',
			'Buy',
			'Rent',
			'Find your next rental from the amazing list of homes ',
			'All Homes for Sale in ',
			'Open Homes in ',
			'Foreclosure Homes in ',
			'View All Rentals in ',
			'Homes for Rent in ',
			'Apartments for Rent in ',
			'Find All Agents in ',
			'Agents',
			'Log In ',
			'Sign Up ',
			'Menu',
			'New',
			'Listings',
			'New Listings for Sale in ',
			'Currently in ',
			'All Listings ',
			'Open Houses ',
			'Sold Listings ',
			'Price Reduced ',
			'Top Cities in ',
			'Find Places to Buy / Rent in these Cities ',
			'Search by City or Region ',
			'Please Set a Location ',
			'Please Choose a Location from the List',
			'Popular',
			'Popular Listings for Rent in ',
			'Listings',
			'in',
			'Why',
			'everything you need to find a home is well served .',
			'Copyright © [Year] [ENGINE_NAME] . All Rights Reserved .',
			'On',
			'provides you an excellent source of listings you won\'t find anywhere else.',
			' Homes for You ',
			' [ENGINE_NAME] gives home buyers, sellers and renters all the tools and valuable information they need to be successful in the home search process . We also provides insights about the house, and the real estate process while connecting people with the right agents . You can find a large, variety of homes on [ENGINE_NAME] ',
			' from which you can select the one that steals your heart . Also you can search for rentals as well . All you have to do is to enter the location you would prefer to buy or rent and we bring you the best matching requests . We provide the every minor details about a listing including the location both as address and geographically on map . On the detail page you could find the various images of the listing as well as every important details that will help you to derive the primary judgement about the listing . Also you can contact the agents / owners from the same page . if you would like to enquire more about a listing, you can do it on A SINGLE click of a button . Also you can save the listings for a later, which can be viewed from your account home .',
			' Want To Sell ',
			' Now Selling is easy as a button click . Just register with us using your email . Thats it, you are in . If you are an agent also just check in the box, while registering . Then go to your account, post a listing you want to sell by including the details . Also you can associate any agents if you would like any help in selling the listing . We will provide you the list of best agents that are working on your listing location based on their history of sold records, rating and reviews . You can send a request to these agents about your listing . Once the Agent approves your request he will be handling your case. Also you can declare an open house by giving the date and time which will attract more users . Also if you are intending on renting out, then you can give out the lease period, deposit etc . Also you can upload a rental form that the users need to fill out . If you request an Agents support, then everything will be handled by him including client contacts . The terms and conditions of an Agent will be discussed outside the system .',
			' How It Works ',
			' helps you to sell your home in record time ',
			' Find out how to Buy / Sell / Rent a home on ',
			' Know More ',
			' Popular Cities ',
			' Recent Searches ',
			' Company',
			' Blog',
			' Terms & amp; Policy ',
			' About us ',
			' Contact Us ',
			' No Cities Found ',
			' No Searches Found ',
			' Homes for Sale in ',
			' Homes for Rent in ',
			' Support Desk ',
			' Take the stress out of finding your dream home .',
			' What We Do',
			' Easy Analysis ',
			' We provide various calculators for making easy estimations on your budget, affordability & amp; long term analysis . The calculators include Affordability calculator that estimates the amount of home you can afford using your monthly income as a revenue source . Mortgage calculator helps you in estimating the amount you have to keep away on a monthly basis to payback the loan amount you intend to take . Rent Vs Buy Calculator helps you to make a wise decision by estimating the duration on which buying is cheaper than renting . Please note that these calculations are based on general logic only . Extra costs and other various taxes may change the actual amounts depending on each banks and country .',
			' How to Sell ',
			' We will help you to sell your property effortless .',
			' you can find a wide variety of homes in ',
			' Growing Market for Agents ',
			' Just register with us for an Agent account and take your business to a new level with wide range of potential Leads . You can List your clients properties as your own for finding more interested buyers . Also if a user wishes to associate an agent for selling his property he can do it on a single click . Agents will also have the provision to accept or reject the request from users . Making your profile in such a potential market increases your business to a large area .',
			' Premium Agents ',
			' Premium Agents are privileged agent accounts on [ENGINE_NAME] . Premium agents has the provision to search for the leads from their account, so that you can always find the potential clients inside your working circle . Also agents with premium status are displayed with priority when ever agents are listed . You can upgrade your agent account status to premium, from your account . ',
			' Easy steps for Selling ',
			' Featured Listing ',
			' Want to get more attention from potential buyers ?. On [ENGINE_NAME], we give an opportunity to highlight your listing with our featured listing status . Lists with featured status will be displayed to a user in more than one sections of the script . On the home page the featured listings available on the users desired location will be displayed & amp; in details page also, location based listings with featured status will be displayed . You can upgrade your property to featured status from your account .',
			' How It Works ',
			' This is how you buy / sell / rent your properties on [ENGINE_NAME] ',
			' Buyer',
			'If you are looking for a dream home on your favourite location, then you have come to the right place . All you have to do is enter your desired location and click on search . We will display you the properties available on the location along with their location . Click on the property that catches your attention . You will get all the details including the facilities, details about the location, type of home, images of home etc . You can go through the all the details & amp; if you are interested then you can request for more details from the same page . Just provide your contact details . We will not keep any of your details in our system . A mail will be sent to the owner / agent that handles the property and in short time you will be contacted by them . if multiple agents are available for a property you can choose from them based on their performance displayed over there . if you have selected more than one agents then your request mail will be sent to each of them .',
			' Seller / Agent',
			'if you are a seller then, please follow the steps on listing your property . ',
			' Register',
			' Please provide your Email, First Name, Last Name, Password and if you are an Agent then select the box that says are you an agent / broker to \'yes\' . After registration you will receive an email for confirming your registration . Click on the link given in the mail to confirm . if your account is active then you will be automatically logged in, otherwise admin will approve your account later ',
			' Provide Details ',
			' On your user account, will be redirected to the edit profile section where you have to provide the required details . if you fail to provide any required details on the profile, you will not be able to add a listing . If you are agent then in order to activate the agent account you must provide all the details listed over there . Once you complete your Agent profile only, others will be able to contact you . ',
			' You can add a listing from your account for posting it . Please make sure you provide all the details related to the listing including images for better clarity . After completing the listing you can activate your listing from the manage listing section . You can also make your listing featured from there . If you need agents to be associated with your listing then you can select from the available agents on your location and send request .',
			' Add / Assign Property ',
			' Wait for Response ',
			' Thats it . Once your listing is active then there is nothing more to do. just wait for the enquires from potential clients . if you have associated any agents, then he will contact you in short time .',
			' Featured Property ',
			' Your Monthly Payment ',
			' Based on your mortgage amount, you should pay this amount monthly for the loan period ',
			' Years',
			'and',
			' Please enter a positive value .',
			' All Homes ',
			' Priority',
			' High',
			' Medium',
			' Low',
			' Subject',
			' Name',
			' Email',
			' Content',
			' Your ticket was sent successfully to our support desk ',
			' Ticket Sent Successfully ',
			' Your Reservation Will be active once We get the confirmation .',
			' Go Back ',
			' Ticket Sending Failed ',
			' Something went wrong while sending your ticket . Please try after sometime .',
			' You haven\'t filled all the required details .',
			'Search Homes ',
			'Agent Finder ',
			'Mortgage Calculator ',
			'Affordability Calculator ',
			'Rent Vs Buy ',
			'How to Sell on ',
			'Support Desk ',
			'Min Price ',
			'All Price ',
			'Max Price ',
			'Beds',
			'Bed',
			'More Filters ',
			'Home Type ',
			'Single Family ',
			'Multi Family ',
			'Apartment',
			'Vacant Land ',
			'Activities',
			'Open House ',
			'New Listing',
			'Price Reduced ',
			'Foreclosure',
			'All Beds ',
			'Bathroom',
			'Bathrooms',
			'Any Home Size ',
			'Square Feet ',
			'Year Build ',
			'All',
			'Month',
			'Months',
			'Homes',
			'Showing',
			'Available in ',
			'Total',
			'Sort by Featured ',
			'Sort by Price High to Low ',
			'Sort by Price Low to High ',
			'Photos',
			'Price Hiked ',
			'Price Reduced ',
			'No Results Found ',
			'We couldn\'t find any results based on your criteria . Below tips may help you .',
			' Remove some filters .',
			' Expand the area of your search .',
			' Search for a city or region .',
			' Listed since ',
			'For Sale ',
			'For Rent ',
			' Acre',
			' Apply Filter ',
			' Cancel',
			' Save',
			' Create',
			' Create New category ',
			' Please Select the Wishlists to which you want to add this List. !',
			' Enter a description(optional) . !',
			' Click to Select!',
			' Property For',
			' Overview',
			' Photos',
			' Location',
			' About this Property ',
			' General Informations ',
			' House Size ',
			' Price',
			' Active',
			' Status',
			' Lot Size ',
			' Year Built ',
			' Rental Informations ',
			' Security Deposit ',
			' Minimum Lease Period ',
			' Download Rental Form ',
			' Years',
			' Other Property Informations ',
			' Messages',
			' Save to WishList ',
			' By Sending a Request you are Agreeing to our Privacy Policy ',
			' Request Info ',
			' Tell Me More About This Property ',
			' Recent Sales ',
			' Premium Agent ',
			' Please Enter Your Name ',
			' Please Enter Your Email ',
			' Please Enter Your Message ',
			' Invalid Email ',
			' Transaction History ',
			' Featured Property ',
			' Your Request for Detailed Information has Successfully Sent for the Property Listed in ',
			' Done',
			' Sale',
			' Real Estate Agents in ',
			' Premium Agents ',
			' Most Sold Agents ',
			' Top Rated Agents ',
			' All',
			' Premium Agent ',
			' No Reviews ',
			' In',
			' No Recent Sales ',
			' Recent Sales ',
			' Results',
			' Search by Agents Work Location ',
			' No Active Listings ',
			' Active Listings ',
			' Contact',
			' You can sort Your Agents List based on the Above Options ',
			' Type In your Agents Name Above ',
			' Choose a City from the given List as Agent Work Location ',
			' Agent Name ',
			' Contact Number ',
			' Your Email ',
			' Your Name ',
			' Your Message ',
			' Please Enter Your Message to the Agent Here .',
			' Send Message ',
			' Your Message has Sent Successfully ',
			' All Messages ',
			' Please Enter a Valid Number ',
			' View Profile ',
			' Logo',
			' About',
			' Reviews',
			' Listings',
			' \'s Bio ',
			'No Details Available ',
			'Languages Known ',
			'Service Areas ',
			'Submit',
			'Website',
			'Youtube',
			'Blog',
			'Facebook',
			'Twitter',
			'Google +',
			'Other Informations ',
			'Service Areas ',
			'Lead Listings ',
			'Agent\'s ',
			' Handled by Agent ',
			' Listings',
			' Agent',
			' Home Seller ',
			' Member Since ',
			' Total Listings ',
			' Total Active Listings ',
			' Total Sold Listings ',
			' Agent Info ',
			' Details of other users & amp; their listings / properties that are handled by you as an agent is displayed here . The previous details of the listing are based on the listings created / owned by you as a seller and not as an agent .',
			' Total Lead Listings ',
			' Total Lead Listings Sold ',
			' Total Active Leads / Clients ',
			' No Listings Found ',
			' Notifications',
			' You don\'t have any active Listings / Properties .',
			'Create New',
			'Complete Now ',
			'You have ',
			'Incomplete Listings ',
			'You have ',
			'Expired Listings . Extend your Listings to make it Active again ',
			'Extend Now ',
			'Make Your Listings Featured to Get more Attention . You have ',
			'Upgrade to Featured Status ',
			'Upgrade to Premium Status Agent Now & amp; Get more Leads .',
			'Upgrade as Premium Agent ',
			'You have ',
			'pending requests from Agents to associate with your property .',
			'Manage Requests ',
			'My WishLists ',
			'Listings',
			'Sorry, No Wishlists Found .',
			'Dashboard',
			'Agent Account ',
			'My Listings ',
			'Add New Listing ',
			'Manage Listings ',
			'My WishLists ',
			'Please Enter Your Username ',
			'Please Enter Your Password ',
			'Invalid Email or Password ',
			'Please Enter Your First Name ',
			'Please Enter Your Last Name ',
			'Please Enter Your Email ',
			'Please Select a Country ',
			'Please Confirm Your Password ',
			'Please Enter a Password ',
			'Password and Confirm password Must be Same ',
			'Minimum Password Length Must be ',
			'This Email already Exists ',
			'This Username is not Available ',
			'Invalid Email ',
			'First Name Must Contain only Letters ',
			'Last Name Must Contain only Letters ',
			'Username',
			'Password',
			'Login With Your Account ',
			'Click Here ',
			'Sorry!SMTP is not configured ',
			'Forgot password ? ',
			'Don\'t have an account ? ',
			' Log In ',
			' Register Now ',
			' Please Fill Out the Required Fields .',
			' First Name ',
			' Last Name ',
			' Email ',
			' member ?',
			' Confirm Password ',
			' Log In ',
			' Already a ',
			' Reset Password ',
			' Enter the email address associated with your account, and we\'ll email you a link to reset your password .',
			'Send Reset Link ',
			'No such email id in the script ',
			'Forgot Password mail sending failed ',
			'Successfully send your forgot password code ',
			'Logout',
			'Submit',
			'My Account ',
			'Yes',
			'No',
			'Are you an Agent / Broker ?',
			'Photo',
			'Sq . ft',
			'Sq . ft',
			'Monthly Payment ',
			'Down Payment ',
			'Rate of Interest ',
			'No of Years ',
			'Mortgage Amount ',
			'Desired Home Price ',
			'Desired Monthly Rent ',
			'Buying will be better than rent after ',
			'Months',
			'Calculate',
			'%',
			'Home Affordability Calculator ',
			'Mortgage Calculator ',
			'Rent Vs Buy Calculator ',
			'Use this calculator to estimate your monthly mortgage payment, excluding taxes and insurance . Simply enter the price of the home, your down payment, and details about the loan tenure to calculate your monthly payment .',
			'You can afford a house up to ',
			'Based on your income, a house at this price should fit comfortably within your budget .',
			'Use this calculator to determine the price limit of a house you can afford . By entering details about your monthly affordable payment, down payment, and loan tenure . you can estimate the maximum budget you can afford by these calculations . ',
			'Use this calculator to help make a vice decision about renting or buying is better . If you are looking for a long term stay, most cases buying will be better .',
			'Desired home price cannot be null .',
			'Desired Rent amount cannot be null .',
			'Desired home price must be a number .',
			'Desired home price must be greater than zero .',
			'Desired Rent amount must be a number .',
			'Desired Rent amount must be greater than zero .',
			'Mortgage amount cannot be null .',
			'Mortgage amount must be a number .',
			'Mortgage amount must be greater than zero .',
			'Rate of interest cannot be null .',
			'Rate of interest must be greater than zero .',
			'Rate of interest must be less than 20. ',
			'Monthly payment cannot be null .',
			'Monthly payment must be a number .',
			'Monthly payment must be greater than zero ',
			'Down payment must be a number .',
			'Down payment must be greater than or equal to zero .',
			'N . A',
			'View Map ',
			'Wishlist Name Cannot be Null ',
			'Wishlist Type Cannot be Null ',
			'Wishlist Name Already Exists ',
			'Select a WishList for Adding ',
			'Create New WishList ',
			'Save',
			'Create',
			'Invalid User ',
			'Amenities',
			'Single Family ',
			'Multi Family ',
			'Apartment',
			'Vacant Land ',
			'Office',
			'Dining',
			'Family',
			'Living',
			'Guest',
			'Cable TV ',
			'Fans',
			'Internet',
			'Security System ',
			'Balcony',
			'Pool',
			'lawn',
			'Garden',
			'Fence',
			'Colonial',
			'Contemporary',
			'Modern',
			'Tile',
			'Carpet',
			'Concrete',
			'Hardwood',
			'Air Conditioner ',
			'Heater',
			'Natural Air ',
			'Garage Attached ',
			'Garage Detached ',
			'Change Password ',
			'Old Password ',
			'New Password',
			'Confirm Password ',
			'Please fill all fields .',
			'Password and Confirm password should be Same ',
			'Password Changed Successfully ',
			'Incorrect Old Password .',
			'Active Leads Exists . Please Remove all Active Leads In Order to Deactivate your Agent Account .',
			'Manage My Agent Account ',
			'Firm Name ',
			'Firm Address ',
			'Premium Status ',
			'Inactive',
			'Blocked',
			'Activate Agent Account ',
			'Deactivate Agent Account ',
			'Upgrade as Premium Agent ',
			'View Active Leads ',
			'Payee Name cannot be null ',
			'Bank Name cannot be null ',
			'Bank address cannot be null ',
			'Bank Account Number cannot be null .',
			'Bank Routing Number cannot be null .',
			'You don\'t have permission to do this .',
			' Account Type Cannot be null ',
			' Please Enter a City .',
			' Please Select a Country ',
			' Zip - code cannot be null .',
			' Invalid Zip - code ',
			' List is already in Featured status .',
			' List already in active state .',
			' Your agent account is already in premium status ',
			' You don\'t have an agent account .',
			'You have already made a request ',
			'Payee Name ',
			'Bank Name ',
			'Bank Address ',
			'Bank Account Number ',
			'Bank swift / Routing Number ',
			'Account Type ',
			'City',
			'Country',
			'Zip',
			'Bank Province ',
			'Bank Beneficiary Name ',
			'Extend Listing ',
			'By extending your listing, you will add ',
			'months to keep your Listing Active ',
			'Start Date ',
			'End Date ',
			'Total Amount ',
			'Payment',
			'Paypal',
			'2CheckOut ',
			'Bank Transfer ',
			'Upgrade as Featured Listing ',
			'Pending',
			'Expired',
			'Inactive Listings ',
			'Incomplete Listings ',
			'Edit Listing ',
			'Remove Listing ',
			'Unlist Now ',
			'Make Featured ',
			'Remove Featured Status ',
			'Manage Agents ',
			'Manage Associated Agents ',
			'Sorry!We couldn\'t find any Listings ',
			' List Now ',
			' View Statistics ',
			' You don\'t have the permission to list it .',
			'Cannot UnList Now . Listing requests already Exists .',
			'Do you want Remove this Listing Featured Status ? ',
			'Do you want make as featured this Listing ?',
			'For Sale ',
			'For Rent ',
			'Select Any Home Status .',
			'Select Sold By .',
			'Sold date cannot be null .',
			'Sold Price cannot be null .',
			'Enter a valid Sold Price .',
			'Phone Number Must be a Number ',
			'Select Any Agent .',
			'Please Add Review about the agent .',
			'Please Rate the Agent .',
			'No such List Exists .',
			'Already added to the sold list.',
			'Successfully Removed the list.',
			'Remove Listing ',
			'Removing your listing will delete the entire details of your listing from display sections and update the status based on your selection below .',
			'To remove this listing, update the Home / Property status:',
			'Home / Property Status ',
			'Sold Out ',
			'No Longer Available For Sale ',
			'Rented Out ',
			'Mention if any Agents Involved ',
			'Yes',
			'Choose Agent ',
			'Agent Review ',
			'Rate Agent ',
			'Sold Price ',
			'Sold Date ',
			'Remove',
			'Select',
			'You have Already Send Request to this Agent ',
			'Your Request has Send Successfully .',
			'You have already sent a request to this user .',
			'Associate Agents To ',
			'Agent Name ',
			'City Name ',
			'Send Request ',
			'Premium Status ',
			'You can extend your premium status to ',
			'You can extend your list featured status to ',
			'Associate Agents To Listing ',
			'You can add more information about what makes your space unique .',
			'Tell guests if you’ll be available to offer help throughout their stay .',
			'How do you expect your guests to behave ?',
			'Show people looking at your listing page what makes your neighbourhood unique .',
			'You can let travellers know if your listing is close to public transportation(or far from it). You can also mention nearby parking options .',
			'House name / number + street / road ',
			'Another address ',
			'Please Enter a City .',
			'Please Enter a State ',
			'Latitude cannot be null .',
			'Longitude cannot be null .',
			'Zip - code cannot be null .',
			'Invalid Zip - code ',
			'Invalid State name ',
			'Invalid City name ',
			'List name cannot be null .',
			'List description cannot be null .',
			'Check at least one amenity ',
			'Leads',
			'Featured',
			'Select a keyword from the list',
			'Invalid Monthly Price ',
			'Select any option ',
			'Daily price must be greater than ',
			'Weekly price must be greater than ',
			'Monthly price must be greater than ',
			'Accommodate',
			'Cancellation Policy ',
			'%',
			'Select a City Name from the List',
			'Sorry, We were not able to identify the location you have entered . Please point out the exact location of your address in the below map and Save Again . ',
			'Please enter a message ',
			'Mark as Blocked Dates ',
			'Remove Blocked Dates ',
			'night',
			'nights',
			'weeks',
			'months',
			'Service Fee ',
			'Total',
			'Successfully blocked the selected dates ',
			'Successfully opened the selected dates ',
			'You are successfully completed your listing steps ',
			'You don\'t have the permission to list it',
			'Phone Number cannot be null',
			'Invalid Phone Number',
			'Gender cannot be null',
			'Cannot Unlist Now . There are active Leads Exist for the Listing . ',
			'Enter Correct Address verification code . ',
			'Enter Address Verification Code . ',
			'Verify the list address',
			'Message cannot be empty',
			'Type',
			'Details',
			'Amount',
			'Paypal',
			'2 CheckOut',
			'Bank',
			'Paypal Email cannot be null',
			'Manage Leads(Agent)',
			'Manage Active Leads',
			'Manage Lead Requests Received',
			'Manage Lead Requests Sent',
			'Search Leads',
			'Account Settings',
			'View Profile',
			'Edit Profile',
			'Change Password',
			'Transactions',
			'Support Desk',
			'Label',
			'Please Choose a label of the listing you are about to add from here . ',
			'Property For Sale',
			'Property For Rent',
			'City / Region',
			'Please choose the city in which your property is located . Make sure you choose from the list, rather than typing in your place . Also make sure that you give the correct city for the best results . ',
			'House / Street Address',
			'You can give the house name or house number, street number etc to pin point your property location . ',
			'Pincode',
			'Please choose the pincode in which your space is located . ',
			'Continue',
			'House Name / Apartment Number / Street Name',
			'Your Agent account is currently Inactive . Go to Agent Account for Activating . ',
			'Activate Now',
			'WishList',
			'Remove',
			'Premium',
			'Complete Your Business Details from Your Profile To Activate your Account . ',
			'Please Map / Add at least One City from your Profile on which your Business is Active',
			'List Your Property',
			'Sell your property fast & amp; effortless through',
			'Please Select a Proper City',
			'Please Enter a Pincode',
			'Pincode must be a Valid Number',
			'Sorry, We were not able to identify the location you have entered . Please point out the exact location of your address in the below map and Save Again . ',
			'Please Enter a City Name . ',
			'Select a City Name from the List',
			'Please Fill all the Mandatory Fields in Your Profile',
			'It is important to give a profile picture to gain the trust of users and to keep it genuine . Note - After uploading the image Click on the Crop button after rearranging the image and you will get a Preview of the cropped image . If you are satisfied with the image then click on \'Save\' button to save the image or \'x\' to discard and upload / crop again . ',
			'Profile Image',
			'More Steps',
			'to List your Property . ',
			'You have successfully completed your Listing Steps ',
			'Home',
			'List Details',
			'Specify the details of the property you have . ',
			'Selling Price / Monthly Rent',
			'Availability Status',
			'Available to All',
			'Available Only To Assigned Agents',
			'Home Type',
			'Mention the Visibility Status of your property among Agents . If you specify as Available to All then our premium agents can search and reach you with requests in helping selling or renting out your property . How ever if you specify as only for assigned agents then only agents you allocate will be able to contact you . ',
			'Choose the Home Type',
			'About This Property',
			'Give a Short Description for your Property . ',
			'Tell others what you love about this property . Keep it simple, but let it highlight your listing . ',
			'Architectural Model',
			'Choose the Architecture Model',
			'Year Built',
			'Modification On',
			'Lot Type',
			'Lot Size',
			'Home Size',
			'Stories',
			'Foreclosure',
			'Additional Details',
			'Open House',
			'Open Date',
			'Actions',
			'End Time',
			'Start Time',
			'Add More',
			'Enter the year on which the property has built',
			'Enter the year on which the property has last modified',
			'Select the Lot size type of your property . ',
			'Enter the Lot size of your property . ',
			'Select the Home size of your property(in Sq Feet). ',
			'Number of stories in house . ',
			'Choose whether your property is a foreclosure or not . ',
			'If your property is a foreclosure then please mention the monthly payment required . ',
			'Foreclosure Payment',
			'Monthly',
			'This is a great way to showcase your home and attract more attention . Declare the time and date on which the buyers / renters can visit the home . ',
			'If a bathroom doesn\'t include a place to shower or bathe, let users know by counting it as a half bathroom . ',
			'Mention any other additional details about your property . ',
			'Characters Remaining ',
			'Specify Your Property ',
			'helps you to find the best buyers for your property ',
			'Languages',
			'Video Url ',
			'Here you can give the link to the video that showcases your property ',
			'Property Price / Rent cannot be Left Blank . ',
			'Please Enter a Valid List Price . ',
			'Please Enter a Valid List Price . ',
			'Listing / Property Description cannot be Left Blank . ',
			'Please Enter a Valid Lot Size . ',
			'Please Enter a Valid Lot Size . ',
			'Please Enter a Valid Home Sizes . ',
			'Please Enter a Valid Home Sizes . ',
			'Foreclosure payment cannot be Left Blank . ',
			'Please Enter a Valid Foreclosure Payment . ',
			'Please Enter a Valid Foreclosure Payment . ',
			'Minimum lease cannot be Left Blank . ',
			'Please Enter a Valid Minimum Lease . ',
			'Please Enter a Valid Minimum Lease . ',
			'Security charge cannot be Left Blank . ',
			'Please Enter a Valid Minimum Security Deposit . ',
			'Please Enter a Valid Minimum Security Deposit . ',
			'You don\'t have the permission to edit this list.',
			'List price cannot be Left Blank . ',
			'About listing cannot be Left Blank . ',
			'Listing price must be an integer . ',
			'Foreclosure payment cannot be Left Blank . ',
			'Foreclosure payment must be an integer . ',
			'Security charge cannot be Left Blank . ',
			'Security charge must be an integer . ',
			'Minimum lease cannot be Left Blank . ',
			'Minimum lease must be an integer . ',
			'Uploaded file must be a document type . ',
			'You are successfully completed your listing steps',
			'Rental Details',
			'You can Specify the Rental conditions and details here',
			'Minimum Lease',
			'In Months',
			'Rental Form',
			'Security Deposit',
			'Date',
			'Save and Continue',
			'Date',
			'Tell Users about your Home Facts',
			'Highlight what makes your property attractive and desirable so that it stands out to buyers . ',
			'Home Facts',
			'Add photos of the property you want to Sell / Rent . You can always come back later and add more . ',
			'Manage My Listing',
			'Manage WishList',
			'Wishlist Name',
			'Delete',
			'Save',
			'Actions',
			'No Wishlists Found',
			'View Wishlist',
			'Here you can view / edit / delete your wishlists . To edit a wishlist type in your new wishlist name and click on Save button . ',
			'Professional Information',
			'Edit Profile Information',
			'First Name',
			'Last Name',
			'Email Address',
			'Please Upload an Image',
			'Upload',
			'Upload image file',
			'Crop Image',
			'Cropped',
			'Save',
			'Recommended image size 400x400',
			'Business Name',
			'Business Address',
			'Phone Number',
			'Pin Code',
			'Agent License',
			'License Description',
			'Add More',
			'Your Website',
			'Youtube URL',
			'Logo',
			'Facebook Link ',
			'Twitter Link',
			'Google + Link',
			'Languages Known',
			'About Me',
			'Blog',
			'Business Locations(City)',
			'Add City',
			'Save Details',
			'Warning: You have uploaded a low resolution image . Image might appear blurred!!!',
			'Image Details has Saved Successfully . ',
			'Please select a City',
			'This City already exists in your List',
			'No more Cities Can be Added',
			'First Name cannot be null . ',
			'Last Name cannot be null . ',
			'Email cannot be null . ',
			'Invalid Email . ',
			'Business Name cannot be left Blank . ',
			'Business Address cannot be left Blank . ',
			'Phone Number must be a Valid Number . ',
			'Pin Number must be a Valid Number . ',
			'Enter a valid Blog url . ',
			'Enter a valid Youtube link . ',
			'Enter a valid Facebook link . ',
			'Enter a valid Twitter link . ',
			'Enter a valid Website link . ',
			'Enter a valid Google + link . ',
			'First Name cannot be left Blank ..',
			'Last Name cannot be left Blank . ',
			'Email cannot be left Blank . ',
			'Enter a valid email . ',
			'Firm Name cannot be left Blank . ',
			'Firm Address cannot be left Blank . ',
			'Firm Phone Number is not Valid . ',
			'Firm Pin Number is not Valid . ',
			'Enter a valid website url . ',
			'Enter a valid Youtube url . ',
			'Enter a valid Facebook url . ',
			'Enter a valid Twitter url . ',
			'Enter a valid Google + url . ',
			'Enter a valid Blog url . ',
			'Image size should be less than 100KB . ',
			'Invalid Image Format . Please upload gif / jpeg / jpg / png . ',
			'You have successfully updated your profile . ',
			'Months',
			'Listing Statistics',
			'You can find your listings popularity statistics from here . ',
			'Last',
			'All Time',
			'Days',
			'Number of Enquiries',
			'Number of Views',
			'Number of Detail Page Views',
			'Sorry, No Data has been Found for this Listing!',
			'Your Agent Account has been Blocked . Please Contact Admin to Activate Again',
			'Contact Admin',
			'Dashboard',
			'Manage My Listings',
			'Create New Listing',
			'My Transactions',
			'Need Help ? ',
			'Logout',
			'Menu',
			'Optional',
			'Listings that is not Featured . ',
			'Property For Sale',
			'Property For Rent',
			'No Longer Available For Rent',
			'No',
			'Rented Price(Monthly)',
			'Rented Date',
			'Please enter the Price that your property has rented out . ',
			'Please select a rented out date . ',
			'Paid by',
			'Completed',
			'Expired',
			'Pending',
			'View Preview',
			'Featured Payment',
			'Premium Payment',
			'Extension Payment',
			'All Transactions',
			'Date',
			'Type',
			'Details',
			'Amount',
			'The price you charge for your listing is completely up to you . ',
			'Select a City from the given List as Agent Location',
			'Sort your Agents list from here',
			'Profile Image',
			'Agent Name',
			'Firm Name',
			'Action',
			'Subject',
			'Enter Your Message',
			'Send Message',
			'Successfully deleted this agent from your assigned list',
			'Please Enter a Subject',
			'Do you want delete this Agent ? ',
			'If you failed to respond for the request with in the time specified above it will be simply expired and marked as Rejected by You . ',
			'This is who we are......',
			'Inout Scripts, Since founded in 2006, have released industry dominating e - Business software tools and PHP based clone scripts for Small Business communities around the world . Our technical excellence in developing clone scripts paired with our diverse industry knowledge have allowed us to create over 20 clone scripts in various industries and functional areas . Our clone scripts industry dominance among on - line businesses is better explained with satisfied clients from over 115 countries . ',
			'Terms and Privacy',
			'Please read carefully the terms and privacy policies of [ENGINE_NAME] before any actions . ',
			'[ENGINE_NAME] provides an on - line platform that connects buyers and sellers who are seeking to sell / buy any properties . By using the Site or Application, you agree to comply with and be legally bound by the terms and conditions of these Terms of Service, whether or not you become a registered user of the Services . These Terms govern your access to and use of the Site . If you do not agree to these Terms, you have no right to obtain information from or otherwise continue using the Site . Failure to use the Site in accordance with these Terms may subject you to civil and criminal penalties . ',
			'THE SITE COMPRISE AN ON - LINE PLATFORM THROUGH WHICH THE SELLER MAY CREATE LISTINGS FOR ANY PROPERTIES OWNED BY HIM AND BUYERS MAY LEARN ABOUT IT CONTACT YOU DIRECTLY / BY AGENTS IF THEY ARE INTERESTED . YOU UNDERSTAND AND AGREE THAT [ENGINE_NAME] IS NOT A PARTY TO ANY AGREEMENTS ENTERED INTO BETWEEN BUYERS,SELLERS AND AGENTS & amp; HAS NO CONTROL OVER THE CONDUCT OF AGENTS / BUYERS / SELLERS & amp; OTHER PARTIES RELATED OF THE SITE OR ANY PROPERTIES, AND DISCLAIMS ALL LIABILITY IN THIS REGARD TO THE MAXIMUM EXTENT PERMITTED BY LAW . WE ARE NOT RESPONSIBLE FOR THE DETAILS LISTED BY A USER OR ANY ABUSIVE CONTENTS THAT MAY OR MAY NOT APPEAR ON SITE . WE DO NOT HOLD ANY RESPONSIBILITIES FOR DISPUTES OF ANY SORT BETWEEN ANY PARTIES THAT MAY OR MAY NOT HAPPEN . ',
			'Modifications',
			'[ENGINE_NAME] reserves the right, at its sole discretion, to modify the Site or to modify these Terms, including the List Extension Fees, Premium Agent Fees & amp; Featured Listing Fess at any time and without prior notice . If the modified Terms are not acceptable to you, your only solution is to cease using the Site . ',
			'member ? ',
			'Sorry!SMTP is not configured',
			'You have successfully completed your Registration Process . Please wait for admin approval',
			'List Now',
			'step to list',
			'steps to list',
			'Enter verification code',
			'Account Type Cannot be null',
			'About Us',
			'Life Time',
			'Image',
			'Lead Name',
			'Listing Address',
			'Featured',
			'Status',
			'Action',
			'Type',
			'Active',
			'Pending',
			'Rejected',
			'List rejected successfully',
			'Do you want reject this request ? ',
			'List Assigned Successfully',
			'Do you want approve this request ? ',
			'Message has sent to the Lead Successfully . ',
			'Manage Lead Requests Received',
			'Manage Lead Requests Sent',
			'Do you want to delete the request ? ',
			'Request Deleted Successfully',
			'Manage Active Leads',
			'Basic',
			'Photos',
			'Add Files',
			'Start Upload',
			'Preview',
			'You\'ve Created Your Listing ',
			'more steps to list your space ',
			'Finish My Listing ',
			'Complete',
			'Start Upload ',
			'Enter the WishList Name ',
			'View profile of ',
			'Bank Details ',
			'Please take a note on the below bank details . Once you make a payment to the bank details specified below, you can enter the details of your payment on the below field . This will raise a request to the admin on the desired amount . Once the admin confirms and approve your payment request, the status will be changed as Completed . All below fields are mandatory ',
			'Save Details ',
			'Add Bank Details ',
			'Please enter the details of your transaction below . Admin will confirm your payment and mark it as completed . ',
			'You can find the important facts about your account from here ',
			'You can manage your agent account from here . You can activate your account, upgrade your account to premium status, and even cancel your agent status from here . Please also note that in order to cancel your account you have to remove your active leads if any . You can also view your active leads from here . ',
			'You can manage your active leads / client requests from here . You can contact the listings owners from here or you can remove the active request from here . Also you can view the details of the listing from here . ',
			'You can manage the lead requests from owners for handling their listings from here . You can contact the owner from here, also you can accept the request if you are interested in their requests . ',
			'You can manage the lead requests sent by you as an agent to the owners for handling their listings from here . You can contact the owner from here, also you can delete your request sent . ',
			'Search Leads ',
			'You can search for leads as an agent from here . Details about the owner, their listings can be viewed from here . You can contact the owner and also send request for handling their listing . If the owner is interested in associating you as an agent, he will accept it . You can also manage your requests from My requested leads section(if the request send is still in pending state) or from My active leads(if the request is in active state) ',
			'Request Sent ',
			'View Listing ',
			'Delete Lead ',
			'Contact Owner ',
			'Delete Lead Request ',
			'Reject Request ',
			'Accept Request ',
			'Please fill all mandatory fields ',
			'Please Upload a Profile Image ',
			'User Details Successfully Saved ',
			'Something Went Wrong . Please Try Again ',
			'Select a City / Region of your Business ',
			'Please Select any City from the List',
			'Manage Associate Agents ',
			'Here you can manage all the agents associated with this listing . You can contact an agent or remove them from here ',
			'Remove Agent ',
			'Contact Agent ',
			'No Assigned Agents Found ',
			'Send Request to Agent ',
			'Send Request to Owner ',
			'Manage Lead Requests ',
			'Manage Lead Requests(Owner) ',
			'You can manage the request send by other agents for handling your Listings from here . You can accept, reject or even contact the agent from here . If you find the agent as a suitable one that could help you in selling / renting out your listings then you can accept his request . Later if you want to remove an Agent then you can go to manage assigned agents to the corresponding Listings and remove him from there . ',
			'Cancelled',
			'Unlimited',
			'Enter a valid Pin Number . ',
			'Save Details ',
			'Cannot delete the city . At least one city is required . ',
			'Photos can bring your Space to life ',
			'Others',
			'Support Desk ',
			'You can manage your active clients / leads from here . You can delete any active leads and contact your clients from here . ',
			'Featured Listings ',
			'For Sale Listings ',
			'For Rent Listings ',
			'All Listings ',
			'Days on ',
			'Please note that the listing price you have entered will be rounded when displayed . ',
			'Transaction Failed . ',
			'Somehow your payment with us have failed . Please contact Admin for confirmation . ',
			'Transaction Completed . ',
			'Your transaction with us has completed successfully . ',
			'View Invoice ',
			'View Receipt ',
			'Invoice / Receipt',
			'Admin',
			'Receipt of Invoice for',
			'Invoice Details ',
			'Invoice ID ',
			'Duration',
			'INV - ',
			'Print Receipt ',
			'Paid To ',
			'Paid',
			'Payment For',
			'Invoice for',
			'Print Invoice ',
			'Agent Premium Payment ',
			'Featured List Payment ',
			'Extend List Payment ',
			'Premium status for your agent account has been expired on ',
			'and extended to a grace period of ',
			'In order to continue as a premium agent please make the payment before the grace period .',
			'Featured status of some of your listing are in grace period .',
			'Some of listing are currently in grace period and will be expired soon .',
			'Click to Extend ',
			'Pay Now ',
			'Retain Featured Status ',
			'days',
			'Grace period is the number of days after expiry .',
			'Bank Payment Request raised successfully .',
			'HomeSize / LotSize Not Available ',
			'Home Size :',
			'Lot Size :',
			'Click to download form ',
			'Successfully edited your wishlist .',
			'Successfully deleted your wishlist .',
			'All Active Listings ',
			'Successfully send your password to your mail ',
			'Your verification code is expired ',
			'Invalid code ',
			'Invalid Verification Code ',
			'Successfully verified your email address ',
			'Successfully send new password to your email ',
			'Close',
			'Sorry, You cannot perform this operation in demo .',
			'Save to Wishlist ',];
		/*	$data2 = Languages::all();
			$data3 = Translation::all();
			$data4 = Msg::all();*/
		$counter = 0;
		foreach ($dataLevel as $row) {
			$data = Translation::create(['couter' => $counter + 1]);
			if (is_int($data['id'])) {
				$recordlevel = Msg::create([
					'translationID' => $data['id'],
					'languageID' => '1',
					'msg' => $row,
				]);
				echo "record inserted against ID : " . $data['id'] . '<br>' . 'As : ' . $row;
			}
			$counter++;
		}
	}
}
