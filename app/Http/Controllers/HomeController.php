<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //testing
        // $name = 'test1';
        // if(request('name')){
        //     $name = request('name');
        // }
        // testing

        $students = Student::all();

        // return view('home',['name'=>$name]);
        return view('home',['students'=>$students]);

    }




}
