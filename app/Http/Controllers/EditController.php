<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class EditController extends Controller
{
    
	public function __construct(){
		$this->middleware('auth');
	}

	public function index($id){
		$student = Student::findOrFail($id);
		return view('edit_student',['student'=>$student]);
	}

	public function update($id){
			$student = Student::findOrFail($id);
			$student->name = request('name');
			$student->email = request('email');
			$student->semester = request('semester');
			$student->phone = request('phone');
			$student->save();

			$students = Student::all();
			return redirect()->route('home',['students'=>$students]);
       		// return view('home',['students'=>$students]);
	}
}
