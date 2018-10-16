<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Newsletter;

class NewsletterController extends Controller
{
    
    public function postNewslatter(Request $request)
    {
        $email = $request->email;
        $oldemail = Newsletter::where('email','=',$email)->first();
        if($oldemail){
            return redirect()->back()->with('success', 'Thanks!');
        }else{
        $newslatter =  $request->all();
        $success = Newsletter::create($newslatter);
        
        return redirect()->back()->with('success', 'Thanks!');
            
        }        
        
    }
    
    
    
}
