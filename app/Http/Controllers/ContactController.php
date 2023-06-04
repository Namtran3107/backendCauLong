<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    
    public function destroy(contact $contact)
    {
        //
    }
        public function view_contact(){
        $contacts = contact::all();
       
        return view('admin.blog-contact',['contacts'=>$contacts]);
        


    }
    public function delete_contact($id){
        $contact = contact::find($id);
        $contact->delete();
        $success = 'Delete contact successfully.';
        return redirect('/admin_contact')->with('success',$success);


    }
    public function create_contact(Request $request){
        
        
        $contact = new contact;
        $contact->name_contact  =$request['name'];
        $contact->email_contact=$request['email'];
        $contact->message_contact=$request['message'];
        $contact->phone_contact=$request['phone'];

        
        $contact->save();
        $success = 'Message sent successfully.';
        return redirect('/contact')->with('success',$success);


    }
    public function view_contact_template() {
        if(Auth::guard('customers')->check()) {
            return view('logged.contact');
        }
        else {
            return view('batminton.contact');
        }
    }
}
