<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Student;

class StudentController extends Controller
{

    public function viewForm(){

        return view('form');

    }

    public function createStudent(Request $request){

        $validator = Validator::make($request->all(), array(
            'first_name'    => 'required|min:2|alpha',
            'last_name'     => 'required|alpha',
            'email'         => 'required|email'
        ));

        if($validator->fails()){

            return redirect('register')
                ->withErrors($validator)
                ->withInput();

        }

        $student = new Student;
        $student->create($request->all());

        /*Assigning individually*/
        //$student->first_name = $request->first_name;
        //$student->last_name = $request->last_name;
        //$student->email = $request->email;
        //$student->save();

    }


}
