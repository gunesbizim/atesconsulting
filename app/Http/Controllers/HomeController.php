<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }


    public function contact(Request $request) {
        $to_name = "Contact Form";
        $to_email = env('REQUEST_RECEIVER_MAIL' , "info@atesconsulting.com");
        $mail_sender = $request['email'];
        $data = [
            'list' =>[
                'namesurname' => $request->namesurname,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ],
        ];

        $cc_mails = explode(',', env('REQUEST_RECEIVER_CC_MAILS'));

        Mail::send('emails.contact', $data, function($message) use ($to_name, $to_email, $cc_mails) {

            $message->to($to_email, $to_name)
                ->subject("Contact Form Received")
                ->cc($cc_mails);

        });

        Mail::send('emails.submit', $data, function($message) use ($to_name, $mail_sender) {

            $message->to($mail_sender, $to_name)
                ->subject("Thank you for contacting us");
        });


        return response()
            ->json([
                'status' => 'success'
            ]);

        return view('frontend.success');


    }
}
