<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Resources\StudentCollection;

class StudentController extends Controller
{
    public function getStudentData(){
        $stud = Student::get();
        $student = StudentCollection::collection($stud);
        return response($student);
    }

    public function search($student){
        $stud = Student::where("name", $student)
                        ->orWhere("email", $student)->paginate(10)->get();
        return $stud;
    }
}
