<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendmessage(Request $request,$api_key,$smsType,$mobile_no,$message_content)
    {

    	
    	$user = User::where('api_key', $api_key)->first();
    	if (is_null($user)) {
    		return response('Invalid Access', 400);
    	}

    	
    	$message_count = strlen($message_content);
    	if ($message_count > 1) {
    		$message_count = $message_count/155;
    	}

    	$message_count = intval($message_count+1);

    	if ($user->balance == 0 ) {
    		return response('Low balance');
    	}
    	if ($user->balance <= $message_count) {
    		return response("Don't have sufficient balance.");
    	}
    	echo "$mobile_no <br>";
    	$country_code = substr($mobile_no,0,3);

    	if ($country_code == '+880' or $country_code == '880'):
    		echo "Good";
    	else:
    		return response("Phone number not valide");
    	endif;

    	echo $country_code;



    	echo "good";




    	/*$response = Http::asForm()->post("https://sms.bicitra.com/api/send?key=61115e594db42c72c693e65dbea193330f423195", [
		    'phone' => '+8801752970499',
		    'message' => 'api message',
		    'key' => '61115e594db42c72c693e65dbea193330f423195'
		]);

		echo $response;*/

    }
}
