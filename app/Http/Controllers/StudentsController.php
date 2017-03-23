<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    public function index()
    {
    	return view ('Student/index');
    }

    public function store(Request $request)
    {
    	$students = new Student;
    	$students->fname = $request->fname;
    	$students->lname = $request->lname;
    	$students->age = $request->age;
    	$students->course = $request->course;
    	$students->studentNumber = $request->studentNumber;
    	$students->address = $request->address;
    	$students->guardian = $request->guardian;
    	$students->number = $request->number;

    	$students->save();

    	$students = Student::all();


    	return view('Student/view', compact('students'));
    }

    public function delete(Request $request, $id)
    {
    	$student = Student::find($id)->delete();
        return redirect ('index/view');
    }

    public function view()
    {
    	$students = Student::all();

    	return view ('Student/view', compact('students'));
    }

    public function showEdit(Request $request, $id) 
    {
    	$students = Student::find($id);

    	return view ('Student/showEdit', compact('students'));
    }

    public function edit(Request $request, $id)
    {
    	$student = Student::find($id);

    	$student->fname = $request->fname;
    	$student->lname = $request->lname;
    	$student->age = $request->age;
    	$student->course = $request->course;
    	$student->studentNumber = $request->studentNumber;
    	$student->address = $request->address;
    	$student->guardian = $request->guardian;
    	$student->number = $request->number;

    	$student->save();

    	return redirect ('index/view');
    }
}
