<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   protected $students;

   public function studenti(){
     $data = $this->students;
     return view('studenti' , compact('data'));
   }

   public function __construct() {
     $this->getAllStudents();
   }

   public function getAllStudents(){
     $this->students = config('students');
     // dd($this->students);
   }

   public function show($id) {
     if(!array_key_exists($id,$this->students)) {
       abort(404);
     }
     //o si utilizza l id oppure lo slug
     $student = $this->students[$id];
     return view('show' , compact('student'));
   }

   public function slug($nome) {
    $trovato = false;
    foreach ($this->students as $studente) {
        if ($studente['slug'] == $nome) {
          $trovato = true;
          $student = $studente;
        }
      }
      if ($trovato) {
        return view('slug' , compact('student'));
      } else {
        abort(404);
      }
   }


}
