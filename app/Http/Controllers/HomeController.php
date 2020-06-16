<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
   public function index() {

      //   $students = Student::all();
      $students = Student::where('name', '<>', '')->orderBy('class', 'asc')->get();


       return view('home', compact('students'));
   }
}
