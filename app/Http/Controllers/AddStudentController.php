<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddStudentController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
		return view('add_student');
    }

    public function store(){
    	return view('home');

	}

}

?>