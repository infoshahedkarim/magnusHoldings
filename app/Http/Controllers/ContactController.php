<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\SendEmail;
use App\Models\ContactDetails;

class ContactController extends Controller
{
    public function getmsg(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'msg' => 'required',
        ]);


        // Prepare the email body
        $emailBody = "You have a new contact form submission:\n\n"
            . "Name: {$request->name}\n"
            . "Email: {$request->email}\n"
            . "Phone: {$request->phone}\n\n"
            . "Message:\n{$request->msg}";

        Mail::raw($emailBody, function ($message) use ($request) {
            $message->to("shahed@ridgebenit.com")
                ->subject("New Contact Form Submission from: " . $request->name)
                ->from('shahed@ridgebenit.com', 'Ridgeben IT Website Form')
                ->replyTo($request->email, $request->name); // So you can reply directly
        });

        SendEmail::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg,
        ]);

        return back()->with('success', 'Thanks for receiving us');
    }
    public function create(Request $request){

        $data = $request->validate([
            'phone1' => 'nullable',
            'phone2' => 'nullable',
            'email1' => 'nullable',
            'email2' => 'nullable',
            'address' => 'nullable',
            'map' => 'nullable',
            
        ]);
        ContactDetails::create($data);
        return redirect()->back()->with('success', 'Contact added successfully!');

    }

    public function indexx(){
        $contact = ContactDetails::first();
        return view('contact', ['contact'=>$contact]);
    }

    public function show(){
        $updates = ContactDetails::all();
        return view('bview.showcontact', compact('updates'));
    }

    public function edit($id){
        $updates = ContactDetails::find($id);
        return view('bview.editcontact', compact('updates'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'phone1' => 'nullable',
            'phone2' => 'nullable',
            'email1' => 'nullable',
            'email2' => 'nullable',
            'address' => 'nullable',
            'map' => 'nullable',
            
        ]);
        ContactDetails::where('id', $id)->update($data);
        return redirect()->route('contact.all')->with('success', 'Contact updated successfully!');
    }
}
