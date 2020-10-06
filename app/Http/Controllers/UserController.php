<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Illuminate\Support\Str;
use App\Models\User;

use Auth;

class UserController extends Controller
{
    public function generateApi()
    {
    	$user = User::find(Auth::user()->id);
    	if (!is_null($user)) {
    		$api_key = Str::random(60).$user->id;
    		$user->api_key = $api_key;
    		$user->save();
    	}
    	return back();
    }
}
