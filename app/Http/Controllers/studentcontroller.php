<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function index()
    {
        $student = student::all();
        return view('student.index' , ['student' => $student]); 
    }
}
