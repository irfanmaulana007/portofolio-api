<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfileController extends Controller
{
	public function getProfile(){
		$profile = Profile::first();
		return response()->json([
		    'fullname' => $profile->fullname,
		    'email' => $profile->email,
		    'country' => $profile->country,
		    'city' => $profile->city,
		    'job' => $profile->job,
		    'company' => $profile->company,
		    'dob' => $profile->dob,
		    'updated_at' => $profile->updated_at,
		]);
	}
}
