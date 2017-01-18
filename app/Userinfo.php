<?php

namespace mifftah;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
	protected $fillable = [
		'bname',
		'baddress',
		'phone',
		'pincode',
		'website',
		'blog',
		'logoimage',
		'language',
		'link_youtube',
		'link_facebook',
		'link_twitter',
		'link_gplus',
		'aboutme',
		'bulocation',
		'license',
		'license_description',
	];
}
