<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_students(){
        static $students=array(0=>"Dauren", 1=>"Talgat", 2=>"Maksat");
        return $students;
    }

    public function show($id)
    {
        $students=$this->get_students();
        return view('students', ["name" => $students[$id]]);
    }
}
