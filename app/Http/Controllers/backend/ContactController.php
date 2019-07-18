<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
    	return view('contact');
    }

    public function store(Request $request)
    {
    	$data = request()->validate([
    		'name' => 'required',
    		'email' => 'required:email',
    		'phone' => 'required',
    		'message' => 'required',
    	]);

         $contact = [];
            $contact['name'] = $request->get('name');
            $contact['phone'] = $request->get('phone');
            $contact['message'] = $request->get('message');
            $contact['email'] = $request->get('email');

    	// send
    	Mail::to('krazaa@gmail.com')->send(new ContactFormMail($contact));
        //Mail::to('crypto.sam@yahoo.com')->send(new ContactFormMail($contact));

        return view('contact')->with('status', 'Your request Scuccessfully send!');
    }

    public function quickinquiry(Request $request)
    {
        
         $this->validate($request, [
            'name' => 'required',
            'contactno' => 'required',
            'email' => 'required:email',
            'service' => 'required',
            'hearaboutus' => '',
            'requirement' => 'required',
            
        ]);

            $contact = [];
            $contact['name'] = $request->get('name');
            $contact['contactno'] = $request->get('contactno');
            $contact['email'] = $request->get('email');
            $contact['service'] = $request->get('service');
            $contact['hearaboutus'] = $request->get('hearaboutus');
            $contact['requirement'] = $request->get('requirement');

         Mail::to('crypto.sam@yahoo.com')->send(new quickinquiry($contact));
         //Mail::send(new quickinquiry($contact));
     
    }

    public function projectinquiry(Request $request)
    {
        
         $this->validate($request, [
            'project' => 'required',
            'name' => 'required',
            'contactno' => 'required',
            'email' => 'required:email',
            'service' => 'required',
            'hearaboutus' => '',
            'requirement' => 'required',
            
        ]);

         $contact = [];
            $contact['name'] = $request->get('name');
            $contact['contactno'] = $request->get('contactno');
            $contact['email'] = $request->get('email');
            $contact['service'] = $request->get('service');
            $contact['hearaboutus'] = $request->get('hearaboutus');
            $contact['requirement'] = $request->get('requirement');
            $contact['project'] = $request->get('project');
            $contact['company'] = $request->get('company');
            $contact['logo'] = $request->get('logo');
            $contact['domain'] = $request->get('domain');
            $contact['hosting'] = $request->get('hosting');
            $contact['budget'] = $request->get('budget');
            $contact['refurl'] = $request->get('refurl');


        Mail::to('crypto.sam@yahoo.com')->send(new projectinquiry($contact));
    }
    
}
