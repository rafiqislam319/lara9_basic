<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\StudentController;

class StudentController extends Controller
{
    public function index(){

        $studentInfos = Student::all();
        
        
        // $studentInfos = Student::find(1)->phone;
        // return response()->json($studentInfos);

        return view('backend.orm.one2one', [
            'studentInfos' => $studentInfos
        ]);
    }
}
