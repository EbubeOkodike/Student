<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Validation\ValidationExcept;

class studentController extends Controller
{
    public function index()
    {
        $students = student::all();
        return view('student.home', compact('students'));
    }
    //

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $student = new student;
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->pic_path = $request->pic_path;
        $student->pic_path = $request->file('image')->store('public/images');
        $student->save();
        return to_route('home');
    }

    public function view($id)
    {
        $student = student::find($id);
        return view('student.view', compact('student'));
    }

    public function edit($id)
    {
        $student = student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = student::find($id);
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->pic = $request->pic;
        $student->update();
        return to_route('home');
    }

    public function expel($id)
    {
        $student = student::find($id);
        $student->delete();
        return to_route('home');
    }
}