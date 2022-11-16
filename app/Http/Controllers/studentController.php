<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Validation\ValidationExcept;
use Illuminate\Support\Facades\Auth;

class studentController extends Controller
{
    public function index()
    {
        $students = student::all();

        return view('student.home', compact('students'));
    }
    //

    public function login()
    {
        return view('student.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register()
    {
        return view('student.register');
    }

    public function createAccount(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:students,email|email',
            'date_of_birth' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'password' => 'required|max:8|min:6'
        ]);

        $path = $request->file('image')->store('public/images');

        $student = new student;
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->image = $path;
        $student->password = bcrypt($request->password);
        $student->save();

        return redirect('login');
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
        $request->validate([
            'firstname' => 'required',            'lastname' => 'required',
            'email' => 'required|unique:students,email|email',
            'date_of_birth' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'password' => 'required|max:8|min:6'
        ]);

        $path = $request->file('image')->store('public/images');

        $student = new student;
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->image = $path;
        $student->password = bcrypt($request->password);
        $student->update();

        return redirect('home');
    }

    public function expel($id)
    {
        $student = student::find($id);
        $student->delete();
        return to_route('home');
    }
}
