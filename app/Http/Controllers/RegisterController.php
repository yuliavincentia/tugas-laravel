<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function index(){
   	return view('index'); 
   }
   public function form(){
   	return view('form'); 
   }
   public function halo(){
   	return view('halo');
   }
   public function form_post(Request $request){
   	// dd($request->all());
   	$fullname=$request->First_Name. " ".$request->Last_Name;

   	return view('halo', compact('fullname'));
   }
} 
