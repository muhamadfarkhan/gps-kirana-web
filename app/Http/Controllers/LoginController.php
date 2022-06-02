<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($user = Auth::user()) {
            return redirect()->intended('/');
        }
        return view('login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $credential = $request->only('username','password');

            $check = User::where('username', $credential['username'])
                        ->where('password', md5($credential['password']))->first();

            if ($check) {
                Auth::login($check);
                $user = Auth::user();
                return redirect()->intended('/');
            }

        return redirect('login')->withInput()
        ->withErrors(['login_error' => 'These credentials do not match our records.']);
   
    }

    public function logout(){
        Auth::logout();
        return Redirect('login');
    }
}
