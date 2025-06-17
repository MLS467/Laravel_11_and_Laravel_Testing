<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class studentController
{
    public function getStudents(Request $request)
    {
        $students = Student::all()->toArray();
        // $students = Student::all()->where('batch', '>', 1); // usando Eloquent para filtrar os alunos com batch maior que 1

        $teste = (new Student())->test($students); // usando o método test da classe Student para filtrar os alunos
        // dd($teste); // Debugging line to check the result
        return view('student', ['content_students' => $teste, 'result' => 'batata']);
    }
}