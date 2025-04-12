<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
      public function login(Request $request)
      {   
             if(!Auth::attempt($request->only('email','password')))
              {
              	return response()->json([
                    'status' =>false,
                    'Message' =>"Invalid credentials",
                ],401);
              }
              else{

              	 $user =User::where('email',$request->email)->first();
              	 if($user)
              	 {
              	 	 return response()->json([
                        'status' =>true,
                        'message' =>'Admin login successfully',
                        'token' =>$user->createToken('API TOKEN')->plainTextToken
              	 	 ],200);
              	 }

              }
      }
 
}
