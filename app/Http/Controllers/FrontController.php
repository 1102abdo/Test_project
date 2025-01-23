<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Message;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\StoreSubscriberRequest;

class FrontController extends Controller
{
   public function index(){
      $companies = Company::all();
    return view("front.index",get_defined_vars());
    
   } 
   public function about(){

    return view("front.about",get_defined_vars());

   } 
   public function service(){

    return view("front.service",get_defined_vars());

   } 
   public function contact(){

    return view("front.contact",get_defined_vars());

   } 
   public function subscriberStore(StoreSubscriberRequest $request){
      $validatedData = $request->validated();
      Subscriber::create($validatedData) ;
    return back()->with('store_subscriber' , 'Subscribed Successfully ');

   } 
   public function contactStore(StoreMessageRequest $request){
      $validatedData = $request->validated();
      Message::create($validatedData) ;
    return back()->with('success' , 'Your Message Sending Successfully');

   } 
}
