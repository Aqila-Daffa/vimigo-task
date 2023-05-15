<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\StudentCollection;
use Laravel\Passport\Token;

class StaffController extends Controller
{
    public function register(Request $request){

        $val = $request->validate([
            'name' => 'required|min:3|max:100|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
        ]);
        
        $val['password'] = Hash::make($val['password']);

        User::create($val);
        return response('User register successfully.');
        
    }

    public function login(Request $request)
    {
        $cred = $this->validate($request, [
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
 
        if (Auth::attempt($cred)) {

            $user=User::where('email',$cred['email'])->first();
            $token=$user->createToken('auth_token')->accessToken;

            $stud = Student::paginate(5);
            $student = StudentCollection::collection($stud);
            return response($student);
        }else{
            return response('Login Failed, Please try again!');
        }  
     }

     public function logout(Request $request)
    {
        //$request->user()->token()->revoke();
 
        // $user = Auth::user();
        // Token::where("user_id", $user)->delete();
        Token::truncate();
        
        return response('You have logged out!');
     }

     public function search(Request $request){

        $studName = $request->input('name');
        $studEmail = $request->input('email');
        $stud = Student::where("name", $studName)
                            ->orWhere("email", $studEmail)->get();
        
        $student = StudentCollection::collection($stud);
        return response($student);

     }
}
