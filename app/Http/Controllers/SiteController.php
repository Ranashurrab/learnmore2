<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index(){
    $data = [1,2,3,4];
     $age=13;
    //return view('index')->with('data',$data) ;//name value
    return view('site1.index',compact('data','age'));//value
    
}
    function about(){
      
       return view('site1.about');
   }
   function service(){
 
    return view('site1.service');
}
 function contact(){
    
    return view('site1.contact');
}
}




