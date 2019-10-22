<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{


	  public function index()
    {
        
         return view('contact.index');
    }



    public function create()
    {
        return view('contact.create');
    }

     public function store()
     {
        $data = request()->validate([
            'name'=>'required|min:4',
            'email'=>'required|email',
            'message' => 'required |min:9',
        ]);

        Mail::to('tulsirammarasini55@gmail.com')->send(new ContactFormMail($data));

        return redirect('contact') ->with('message','Thanks For your Message');
        

            
    
     }
}
