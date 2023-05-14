<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function getStudentData(){
        $stud = Student::select('name', 'address')->get();
        return $stud;
    }
}
