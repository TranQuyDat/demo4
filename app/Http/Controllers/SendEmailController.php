<?php

namespace App\Http\Controllers;

use App\Mail\WellcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class SendEmailController extends Controller
{
    
    public function sendEmail(Request $request){
        $validatedData =  $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $mails = new WellcomeEmail($validatedData);
        Mail::to($validatedData['email'])->send($mails);
        return 'Send mail successfully';
    }
  
}
