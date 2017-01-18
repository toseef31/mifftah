<?php

namespace mifftah;

use Illuminate\Database\Eloquent\Model;

class booking extends Model {
	protected $fillable = [
		'userID',
		'propertyID',
		'name',
		'email',
		'phone',
		'message',
		'bookingStatus',
	];
}
