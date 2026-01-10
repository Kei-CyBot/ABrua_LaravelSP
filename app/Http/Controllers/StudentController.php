<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home() {
        return view('home');
    }

    public function index() {
        return view('students.index');
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        // Simulating a dynamic add feature
        // In a real app, you would save to the database here
        return redirect()->route('students.index')->with('success', 'Student created successfully (Simulation)');
    }

    public function show($id) {
        return view('students.show');
    }

    public function edit($id) {
        return view('students.edit');
    }
    
    public function update(Request $request, $id) {
        return redirect()->route('students.index')->with('success', 'Student updated successfully (Simulation)');
    }
}
