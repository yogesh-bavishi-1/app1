<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use HomeController;

class DeleteController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

    public function index($id){
    	// $student = Student::findOrFail($id);

    	return view('delete_student',['id'=>$id]);
    }

    public function remove($id){
    	 $student = Student::findOrFail($id);
    	 $student->delete();

    	 $students = Student::all();
    	 return redirect()->route('home',['students'=>$students]);
     }
}
