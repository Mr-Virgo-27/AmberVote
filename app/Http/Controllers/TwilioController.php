<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class TwilioController extends Controller
{
    /**
     * Send sms message through twilio
     * 
     * @return response()
     */
    public function sendSMS($phone, $message)
    {
        // $request->validate([
        //     'phone' => 'required',
        //     'message' => 'required|max:255'
        // ]);

        // $receiverNumber = $request->phone;
        // $message = $request->message;
        $receiverNumber = $phone;
        $message = $message;

        try {

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message
            ]);

            return redirect('ViewVoterIndex');
        } catch (Exception $e) {
            dd("Error: " . $e->getMessage());
        }
    }
}
