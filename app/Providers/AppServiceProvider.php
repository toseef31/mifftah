<?php

namespace mifftah\Providers;

use mifftah\Languages;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use mifftah\Msg;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		$clang = 'msg_en';
		$query = Msg::all()->toArray();
		$queryIndexed = array_filter(array_merge(array(0), $query));
//		dd($query);
		\View::share(['lang' => $queryIndexed, 'current' => $clang]);
	}
	
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
