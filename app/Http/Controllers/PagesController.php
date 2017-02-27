<?php
namespace mifftah\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mifftah\Listings;
use mifftah\booking;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller {
	
	public function index() {
		return view('index');
	}
	
	public function arindex() {
		return view('ar.index');
	}
	
	public function agents() {
		return view('agents');
	}
	
	public function mortgageCalculator() {
		return view('calculator_mortgage');
	}
	
	public function affordabilityCalculator() {
		return view('calculator_affodability');
	}
	
	public function rentorbuyCalculator() {
		return view('calculator_rentorbuy');
	}
	
	public function howitwork() {
		return view('howitwork');
	}
	
	public function mailsend() {
		return view('mailsend');
	}
	
	public function support() {
		return view('support');
	}
	/*============================*/
	/* search Functions  */
	/*============================*/
	public function searchpro(Request $request) {
		
		if (isset($request->filter_wewwrw)) {
			
			/** if there is a filter value then we have advance searching **/
			$query = DB::table('listings');
			/** min price  **/
			if (isset($request->minprice) && !empty($request->minprice)) {
				$query->where('price', '>', $request->minprice);
			}
			/** max price  **/
			if (isset($request->maxprice) && !empty($request->maxprice)) {
				$query->where('price', '<', $request->maxprice);
			}
			/** Beds **/
			if (isset($request->beds) && !empty($request->beds)) {
				$query->where('beds', $request->beds);
			}
			/** Bathrooms **/
			if (isset($request->bathrooms) && !empty($request->bathrooms)) {
				$query->where('bathrooms', $request->bathrooms);
			}
			/** size **/
			if (isset($request->size) && !empty($request->size)) {
				$query->where('homesize', $request->size);
			}
			/** year built **/
			if (isset($request->yearbuilt) && !empty($request->yearbuilt)) {
				$query->where('yearbuilt', $request->yearbuilt);
			}
			/** days  **/
//			if (isset($request->yearbuilt)) { $query->where('yearbuilt',$request->yearbuilt); }
			/** hometype **/
			if (isset($request->hometype) && !empty($request->hometype)) {
				$query->where('hometype', ucfirst($request->hometype));
				$query->orWhere('hometype', lcfirst($request->hometype));
				$query->orWhere('hometype', strtolower($request->hometype));
				$query->orWhere('hometype', strtoupper($request->hometype));
			}
			/** Forclouser **/
			if (isset($request->forclosure) && !empty($request->forclosure)) {
				$query->where('forclosure', $request->hometype);
			}
//			$data = $query->paginate(10);
			$data = $query->toSql();
			dd($data);
		} else {
			/** if there is no filter value then we have a regular search **/
			$data = Listings::where(function ($q) use ($request) {
				$q->orWhere('region', 'like', '%' . ucfirst($request->citysearch) . '%');
				$q->orWhere('region', 'like', '%' . lcfirst($request->citysearch) . '%');
				$q->orWhere('region', 'like', '%' . strtolower($request->citysearch) . '%');
				$q->orWhere('region', 'like', '%' . strtoupper($request->citysearch) . '%');
				
				$q->orWhere('title', 'like', '%' . ucfirst($request->citysearch) . '%');
				$q->orWhere('title', 'like', '%' . lcfirst($request->citysearch) . '%');
				$q->orWhere('title', 'like', '%' . strtolower($request->citysearch) . '%');
				$q->orWhere('title', 'like', '%' . strtoupper($request->citysearch) . '%');
			})->paginate(10);
		}
		return view('searchList', compact('data'));
	}
	
	public function homepreview($id) {
		$data = Listings::where('id', $id)->get()->first();
		$properties = Listings::where('status' , 1)->get();
		if ($data) {
			return view('dashboardUser.userDashboard_homepreview', compact('data', 'properties'));
		} else {
			return redirect(url('/'));
		}
		
	}
	
	public function arhomepreview($id) {
		$data = Listings::where('id', $id)->get()->first();
		if ($data) {
			return view('ar.dashboardUser.userDashboard_homepreview', compact('data'));
		} else {
			return redirect(url('/'));
		}
		
	}
	
	public function postform(Request $request) {
		if (Auth::check()) {
			$this->validate($request, [
				'name' => 'required|max:130',
				'email' => 'required|max:130|email',
				'phone' => 'required|max:130',
				'message' => 'required',
				'bookingStatus' => 'required|numeric',
			]);
			$request->merge(['userID' => Auth::user()->id, 'notification' => 0]);
			booking::create($request->all());
			$request->session()->flash('status', 'Your Booking is Reserved and notiification is sent to Vendor !');
			return back();
		} else {
			return back();
		}
	}
	
}

