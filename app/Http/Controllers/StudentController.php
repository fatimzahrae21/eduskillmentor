<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class StudentController extends Controller
{
    public function showSignInForm()
    {
        return view('login.signin');
    }

    public function signIn(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
    
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
    
        $request->session()->regenerate();
    
       
        return redirect()->route('index');
    }

    public function showSignUpForm()
    {
        return view('login.signup');
    }

    public function signUp(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();
    
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
          
        ]);
    
        return redirect()->route('signin');
    }

public function logout(Request $request)
{
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    return redirect('/signin');
}
}







