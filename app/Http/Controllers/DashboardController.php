<?php
namespace mifftah\Http\Controllers;

//use App\About;
use Illuminate\Http\Request;

//use App\User;
//use App\Songs;
//use App\Shows;
//use App\Albums;
//use App\Socials;
//use App\Blogs;
use Illuminate\Support\Facades\Auth as aauth;
use \Faker as Faker;
use \Carbon as Carbon;
use Illuminate\Support\Facades\Auth;
use mifftah\User;
use mifftah\Listings;

class DashboardController extends Controller {
	
	function __construct() {
		$this->middleware('auth');
	}
	
	public function index() {
		return view('dashboard.index');
	}
	
	public function getall() {
		$users = User::orderBy('id', 'desc')->paginate(10);
		return view('dashboard.userList', compact('users'));
	}
	
	public function adduser(Request $request) {
		$this->validate($request, ['']);
		return view('dashboard.userAdd', compact('user'));
	}
	
	public function getsingle($id) {
		$user = User::where('id', $id)->first();
		return view('dashboard.userEdit', compact('user'));
	}
	
	public function updateAdmin($id) {
		$userID = Auth::user()->id;
		$user = User::where('id', $userID)->first();
		return view('dashboard.userEdit', compact('user'));
	}
	
	public function updateUserRecord() {
		$user = User::findOrFail(aauth::user()->id);
		return view('dashboard.adminEdit', compact('user'));
	}
	
	
	public function updateUser(Request $request, $id) {
		$this->validate($request, [
			'name' => 'required|alpha|min:3|max:32',
			'lname' => 'required|min:3|max:32',
			'email' => 'required|max:255',
			'password' => 'min:3|confirmed',
			'password_confirmation' => 'min:3'
		]);
//		return $request->all();
		$userexists = User::findOrfail($id);
		$request->request->add(['password' => bcrypt($request->password)]);
		$userexists->update($request->all());
		return redirect('admin/getall');
	}
	
	public function delu($id) {
		$user = User::destroy($id);
		if ($user == 1) {
			return redirect('/getall');
		} else {
			return "Soory Wrong Argument Passed Go back and dont try to do fancy things things are tight here";
		}
	}
	
	public function searchuser() {
		return view('dashboard.userSearch');
	}
	
	public function getsearchuser(Request $request) {
		$users = User::where('name', 'like', '%' . $request->name . '%')->orWhere('lname', 'like', '%' . $request->name . '%')->orWhere('email', 'like', '%' . $request->name . '%')->paginate(10);
		return view('dashboard.userList', compact('users'));
	}
	
	public function searcagent() {
		return view('dashboard.userAgentSearch');
	}
	
	public function getsearchagent(Request $request) {
		$users = User::where('type', 1)->where('name', 'like', '%' . $request->name . '%')->orWhere('lname', 'like', '%' . $request->name . '%')->orWhere('email', 'like', '%' . $request->name . '%')->paginate(10);
		return view('dashboard.userList', compact('users'));
	}
	
	/*============================*/
	/* manage agents  */
	/*============================*/
	public function getallagents() {
		$users = User::whereType(1)->orderBy('id', 'desc')->paginate(10);
		return view('dashboard.userList', compact('users'));
	}
	
	/* ================================================================================= */
	/* withdraws section */
	/* ================================================================================= */
	
	public function getuserdata($id) {
		return User::whereId($id)->get();
	}
	
	/* ================================================================================= */
	/* Shows */
	/* ================================================================================= */
	
	
	public function manageLeads() {
		$data = Listings::whereAvailability(1)->orderBy('id', 'desc')->paginate(10);
		return view('dashboard.leadsList', compact('data'));
	}
	
	public function manageAdminLeads() {
		$data = Listings::where('postedBy', Auth::user()->id)->whereAvailability(1)->orderBy('id', 'desc')->paginate(10);
		return view('dashboard.leadsList', compact('data'));
	}
	
	public function addLeads() {
		return view('dashboard.leadsAdd', compact('data'));
	}
	
	public function editlead($id) {
		$data = Listings::findOrFail($id);
		return view('dashboard.leadsEdit', compact('data'));
	}
	
	
	public function delead($id) {
		$dellead = Listings::destroy($id);
		if ($dellead == 1) {
			return redirect(url('/admin/manageLeads'));
		} else {
			return "Soory Wrong Argument Passed Go back and dont try to do fancy things things are tight here";
		}
	}
	
	
}
