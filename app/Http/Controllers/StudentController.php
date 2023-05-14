<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function getStudentData(){
        $stud = Student::select('name', 'address')->get();
        return $stud;
    }

    public function search($student){
        $stud = Student::where("name", $student)
                        ->orWhere("email", $student)->get();
        return $stud;
    }
}
