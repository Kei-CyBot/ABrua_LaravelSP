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
                @if($students->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center py-4">No students found. Click "Add New Student" to start!</td>
                    </tr>
                @else
                    @foreach($students as $student)
                    <tr>
                        <td class="py-3">{{ $loop->iteration }}</td>
                        <td class="py-3">{{ $student->name }}</td>
                        <td class="py-3">{{ $student->course }}</td>
                        <td class="py-3">{{ $student->year_level }}</td>
                        <td class="py-3">
                            <x-action-button type="view" href="{{ route('students.show', $student->id) }}" />
                            
                            <x-action-button type="edit" href="{{ route('students.edit', $student->id) }}" />

                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-delete action-btn-base" 
                                        onclick="return confirm('Are you sure you want to delete {{ $student->name }}?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

@endsection