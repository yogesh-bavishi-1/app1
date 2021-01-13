<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
    	return view('add_student');
    }

    public function store(){
    	
        $student = new Student();

        $student->name = request('name');
        $student->email = request('email');
        $student->semester = request('semester');
        $student->phone = request('phone');

        $student->save();

        $students = Student::all();
        return view('home',['students'=>$students]);
    }
}
