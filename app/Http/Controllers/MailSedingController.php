<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Http\Controllers\Mails;

class MailSedingController extends Controller
{

    public function postAskQuestion($data)
    {
        
        Mail::send('mails.ask_question', ['data'=>$data], function ($message) use ($data) {
            $message->to( env('EMAIL_INFO') , 'To whom it may concern')
                    ->cc($data->email)
                    ->from( env('EMAIL_SYS') , 'Notification System')
    	            ->subject('New Contact Request has arrived');
    	});
    	

        
    }
    
    
}
