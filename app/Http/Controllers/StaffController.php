<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function register(Request $request){

        $val = $request->validate([
            'name' => 'required|min:3|max:100|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
            'confirm_password' => 'required|same:password'
        ]);
        
        $val['password'] = Hash::make($val['password']);

        User::create($val);
        return 'User register successfully.';

        
    }

    public function login(Request $request)
    {
        $cred = $this->validate($request, [
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
 
        if (Auth::attempt($cred)) {
            $stud = Student::select('name', 'address')->get();
            return $stud;
        }else{
            return 'Login Failed, Please try again!';
        }  
     }
}
