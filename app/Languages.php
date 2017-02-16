<?php

namespace mifftah;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model {
	protected $guarded = ['id'];
	
	public function message() {
		return $this->hasMany(Msg::class, 'languageID', 'id');
	}
}
