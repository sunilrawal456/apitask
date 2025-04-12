<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function logincheck(Request $request)
    {
    	$request->validate([
               'email' =>'required',
               'password' =>'required'
    	]);

    	$credentials = $request->only('email','password');
    	if(Auth::attempt($credentials))
    	{
    	  return redirect()->route('dashboard');
    	}
    	return redirect()->route('logout');
    }

    public function dashboard()
    {
      return view('dashboard');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('logout');
    }

   
}
