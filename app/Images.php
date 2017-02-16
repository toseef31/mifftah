<?php

namespace mifftah;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {
	protected $fillable = [
		'name',
		'listID',
		'userID',
	];
	 
}
