<?php

namespace mifftah;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model {
	protected $fillable = [
		'userID',
		'listid',
	];
	
	public function wishitem() {
		return $this->belongsTo(Listings::class, 'listid', 'id');
	}
}
