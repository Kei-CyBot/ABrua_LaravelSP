@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Student List</h2>
    <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Year Level</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>BS Information Technology</td>
            <td>3rd Year</td>
            <td>
                <a href="{{ route('students.show', 1) }}" class="btn btn-info btn-sm text-white">View</a>
                <a href="{{ route('students.edit', 1) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Doe</td>
            <td>BS Computer Science</td>
            <td>2nd Year</td>
            <td>
                <a href="{{ route('students.show', 2) }}" class="btn btn-info btn-sm text-white">View</a>
                <a href="{{ route('students.edit', 2) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Jose Doe</td>
            <td>BS Engineering</td>
            <td>4th Year</td>
            <td>
                <a href="{{ route('students.show', 3) }}" class="btn btn-info btn-sm text-white">View</a>
                <a href="{{ route('students.edit', 3) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection