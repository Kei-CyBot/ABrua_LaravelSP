@extends('layout')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 style="color: #4a3b2a;">Student List</h2>
        <a href="{{ route('students.create') }}" class="btn text-white" style="background-color: #bc6c25;">
           Add New Student
        </a>
    </div>

    @if(session('success'))
        <div class="alert" style="background-color: #dda15e; color: #4a3b2a; border-color: #bc6c25;">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <table class="table table-custom mb-0">
            <thead>
                <tr>
                    <th class="py-3">ID</th>
                    <th class="py-3">Name</th>
                    <th class="py-3">Course</th>
                    <th class="py-3">Year Level</th>
                    <th class="py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-3">1</td>
                    <td class="py-3">John Doe</td>
                    <td class="py-3">BS Information Technology</td>
                    <td class="py-3">3rd Year</td>
                    <td class="py-3">
                        <x-action-button type="view" href="{{ route('students.show', 1) }}" />
                        <x-action-button type="edit" href="{{ route('students.edit', 1) }}" />
                        <x-action-button type="delete" href="#" /> 
                    </td>
                </tr>

                <tr>
                    <td class="py-3">2</td>
                    <td class="py-3">Jane Doe</td>
                    <td class="py-3">BS Computer Science</td>
                    <td class="py-3">2nd Year</td>
                    <td class="py-3">
                        <x-action-button type="view" href="{{ route('students.show', 2) }}" />
                        <x-action-button type="edit" href="{{ route('students.edit', 2) }}" />
                        <x-action-button type="delete" href="#" />
                    </td>
                </tr>

                <tr>
                    <td class="py-3">3</td>
                    <td class="py-3">Jose Doe</td>
                    <td class="py-3">BS Engineering</td>
                    <td class="py-3">4th Year</td>
                    <td class="py-3">
                        <x-action-button type="view" href="{{ route('students.show', 3) }}" />
                        <x-action-button type="edit" href="{{ route('students.edit', 3) }}" />
                        <x-action-button type="delete" href="#" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection