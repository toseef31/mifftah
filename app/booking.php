<?php

namespace mifftah;

use Illuminate\Database\Eloquent\Model;

class booking extends Model {
	protected $fillable = [
		'userID',
		'propertyID',
		'vendorID',
		'name',
		'email',
		'phone',
		'message',
		'bookingStatus',
		'status',
		'notification',
	];
	
	public function udata() {
		return $this->hasOne('App\User');
	}
}
