<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class studentController
{
    public function getStudents(Request $request)
    {
        $students = (new Student())->getStudent();
        return view('student', ['content_students' => $students, 'result' => 'batata']);
    }
}
