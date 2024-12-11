<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

	protected $guarded = [];

	public function profileImage()
	{
		$imagePath = ($this->image) ? $this->image : 'profile/W7aQQc1Px7SAJ45tZsCDuO3NH2Hd3R3mPKxuPOaF.png';
		
		return '/storage/' . $imagePath;
	}

	public function followers()
	{
		return $this->belongsToMany(User::class);
	}
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
    
}
