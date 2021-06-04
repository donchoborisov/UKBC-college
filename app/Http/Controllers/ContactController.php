<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Contact;
use Illuminate\Support\Facades\URL;
class ContactController extends Controller
{
    public function contactPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        
        $previousURL = url()->previous();

         if ($validator->fails()) {
              
           
         if($previousURL == "http://127.0.0.1:8000/") {


            return redirect()->to('/'.'#contact')
                        ->withErrors($validator)
                        ->withInput();

         }else {

            return redirect()->to('/contact')
            ->withErrors($validator)
            ->withInput();


         }

        } 

    

        Contact::create($request->all());
        
        if($previousURL == "http://127.0.0.1:8000/") {
   
         return redirect()->to('/'.'#contact')->with('success', 'Your message has been sent!');  

        } else {
            return redirect()->to('/contact')->with('success', 'Your message has been sent!'); 
        }
     
    }




}
