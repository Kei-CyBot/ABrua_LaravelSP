<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 

class StudentController extends Controller
{
    // Landing Page
    public function home() {
        return view('home');
    }

    public function index() {

        $students = Student::all(); 
        
        return view('students.index', compact('students'));
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'gender' => 'required',
            'course' => 'required',
            'year_level' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
                         ->with('success', 'Student created successfully!');
    }

    public function show($id) {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id) {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }
    
    public function update(Request $request, $id) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students,email,'.$id, 
        'gender' => 'required',
        'course' => 'required',
        'year_level' => 'required',
    ]);

    $student = Student::findOrFail($id);

    $student->update($request->all());

    return redirect()->route('students.index')
                     ->with('success', 'Student updated successfully!');
}

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')
                         ->with('success', 'Student deleted successfully!');
    }
}