<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class FileController extends Controller
{
    public function upload(Request $request){
        //$result = $request->file('file')->store('apiDocs');
        $result = $request->file('file');
        $csvData = file_get_contents($result);
    
        //$data_rows = array_map(callback: 'str_getcsv', preg_split('\n', $csvData));
        $split = preg_split("/[\n\r]+/", $csvData);
        
        $dataRows = array_map('str_getcsv', $split);

        $dataAll = [];
        for($i = 0; $i < sizeof($dataRows); $i++){
            $arr = preg_split("/[;]+/", $dataRows[$i][0]);
            array_push($dataAll, $arr);
            
        }

        $size = sizeof($dataAll) - 1;
        unset($dataAll[$size]);
        $header = array_shift($dataAll);
 
        foreach($dataAll as $dAll){
            $dAll = array_combine($header, $dAll);
            //dd(reset($dAll));
            if($dAll != null){
                Student::updateOrCreate([
                    'name' => reset($dAll),
                    'email' => $dAll["email"],
                    'address' => $dAll["address"],
                    'study_course' => $dAll["study_course"],
                ]);
            }         
        }
    
        return response('Student register successfully.');
    }
}
