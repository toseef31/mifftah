<?php
namespace mifftah\Http\Controllers;

use Illuminate\Http\Request;
use mifftah\Listings;
use mifftah\Userinfo;
use mifftah\User;
use mifftah\Wishlist;

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
//		return $data->userdatainfo()->get();
		$info = Userinfo::where('userID', Auth::user()->id)->get()->first();
		$wishlist = Wishlist::where('userID', Auth::user()->id)->get()->toArray();
		$listing = Listings::where('postedBy', Auth::user()->id)->get()->first();
		// return $listing;
//		return $wishlist;
		return view('dashboardUser.userDashboard_dashBoard', compact('data', 'info', 'wishlist', 'listing'));
		
	}
	
	public function agentaccount() {
		$data = User::findOrFail(Auth::user()->id);
		$userinfo = Userinfo::where('userID', Auth::user()->id)->first();
		return view('dashboardUser.userDashboard_agentAccount', compact('data', 'userinfo'));
	}
	
	public function newlist() {
		return view('dashboardUser.userDashboard_newlist');
	}
	
	public function addlist(Request $request) {
//		return $request->all();
		$this->validate($request, [
			'title' => 'required|max:70',
			'type' => 'required|max:10|alpha',
//			'postedBy' => 'required|max:255|int',
			'longitude' => 'required|numeric',
			'latitude' => 'required|numeric',
//			'phone' => 'required|numeric',
			'region' => 'required',
			'street' => 'required',
			'homesize' => 'required|numeric',
//			'pincode' => 'required|numeric',
			'price' => 'required|numeric',
//			'availability' => 'required|numeric',
//			'hometype' => 'required	',
			'info' => 'required',
			'architecturalmodel' => 'required',
			
			'yearbuilt' => 'required',
			'yearmodified' => 'required',
			'lottype' => 'required|numeric',
			'stories' => 'required|numeric',
			'forclosure' => 'required|numeric',
			'otherrentdetail' => 'required',
			'videolink' => 'required',
			'beds' => 'required|numeric',
			'bathrooms' => 'required|numeric',
			'opendate' => 'required',
			'starttime' => 'required',
			'endtime' => 'required',
			
			'office' => 'numeric',
			'dinning' => 'numeric',
			'family' => 'numeric',
			'living' => 'numeric',
			'guest' => 'numeric',
			'kitchen' => 'numeric',
			'cabelTv' => 'numeric',
			'fans' => 'numeric',
			'internet' => 'numeric',
			'securitysys' => 'numeric',
			'wifi' => 'numeric',
			'balcony' => 'numeric',
			'pool' => 'numeric',
			'lawn' => 'numeric',
			'garden' => 'numeric',
			'fence' => 'numeric',
			'gym' => 'numeric',
			'floortye' => 'required',
			'aircondition' => 'numeric',
			'heater' => 'numeric',
			'naturalAir' => 'numeric',
//			'garagetype' => 'required',
			'buildingview' => 'required',
		]);
//		$files = Request::file('img');
//		return $files;
		$request->request->add(['postedBy' => Auth::user()->id]);
		Listings::create($request->all());
		return 'inserted sucessfully ';
	}
	
	public function managelist() {
		$user_mange = Listings::where('postedBy', Auth::user()->id)->paginate(5);
//		return $user_mange;
		return view('dashboardUser.userDashboard_managelist', compact('user_mange'));
	}
	
	public function wishlist() {
		$user_mange = Wishlist::where('userID', Auth::user()->id)->get()->toArray();
		
		$data = [];
		
		foreach ($user_mange as $item) {
			
			array_push($data, Listings::where('id', $item['listid'])->get()->first());
		}
		return view('dashboardUser.userDashboard_wishlist', compact('data'));
	}
	
	public function removewishlist($id) {
		Wishlist::where('userID', Auth::user()->id)->where('listid', $id)->delete();
		return back();
	}
	
	public function homepreview($id) {
		$data = Listings::where('postedBy', Auth::user()->id)->get()->first();
        //echo'<pre>';var_dump( $data );echo'</pre>';
		return view('dashboardUser.userDashboard_homepreview', compact('data'));
	}
	
	public function activeleads() {
		$data = Listings::where('availability', 1)->paginate(10);
//	return $data;
		return view('dashboardUser.userDashboard_leads_active', compact('data'));
	}
	public function deadleads() {
		$data = Listings::where('availability', 0)->paginate(10);
//	return $data;
		return view('dashboardUser.userDashboard_leads_active', compact('data'));
	}
	
	public function requestsleads() {
		return view('dashboardUser.userDashboard_leads_requests');
	}
	
	public function requestsleadssent() {
		return view('dashboardUser.userDashboard_leads_requests');
	}
	
	public function requestsleadsearch() {
		return view('dashboardUser.userDashboard_leads_requests_search');
	}
	
	public function adminLeads() {
		return view('dashboardUser.userDashboard_leads_requests_owner');
	}
	
	public function homedetails() {
		return view('dashboardUser.userDashboard_owner_home_details');
	}
   
	
	public function viewprofile() {
		$data['profile'] = User::where('id', Auth::user()->id)->get()->toArray();
		$data['info'] = Userinfo::where('userID', Auth::user()->id)->get()->toArray();
//		return $data;
		return view('dashboardUser.userDashboard_profile_view', compact('data'));
	}
	
	public function editprofile() {
		$data = User::where('id', Auth::user()->id)->first();
		$listings = Userinfo::where('userID', $data->id)->get();
		return view('dashboardUser.userDashboard_profile_edit', compact('data', 'listings'));
	}
	
	public function updateprofileUser(Request $request) {
		$data = User::where('id', Auth::user()->id)->first();
		$update = $data->update($request->all());
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
}
