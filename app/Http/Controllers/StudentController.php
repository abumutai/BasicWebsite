<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $students=Student::paginate(3);
        return view('welcome',compact('students'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $this->validate($request,[
         'firstname'=>'required',
         'lastname'=>'required',
         'email'=>'required',
         'phone'=>'required'
        ]);

        $student = new Student;
        $student->first_name=$request->firstname;
        $student->last_name=$request->lastname;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        return redirect('/')->with('successMsg','Student added successfully');
    }
    public function edit($id){
        $student = Student::find($id);
        return view('edit',compact('student'));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'phone'=>'required'
           ]);
   
           $student = Student::find($id);
           $student->first_name=$request->firstname;
           $student->last_name=$request->lastname;
           $student->email=$request->email;
           $student->phone=$request->phone;
           $student->save();
           return redirect('/')->with('successMsg','Student updated successfully');  
    }
    public function delete($id){
        Student::find($id)->delete();
        return redirect('/')->with('successMsg','Student deleted successfully');  
    }
}
