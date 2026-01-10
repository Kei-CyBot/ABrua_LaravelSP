@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Student</div>
            <div class="card-body">
                <form action="{{ route('students.update', 1) }}" method="POST">
                    @csrf
                    @method('PUT') <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" value="John Doe">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" value="john.doe@uic.edu.ph">
                    </div>

                    <div class="mb-3">
                        <label for="course" class="form-label">Course</label>
                        <input type="text" class="form-control" name="course" value="BS Information Technology">
                    </div>

                    <div class="mb-3">
                        <label for="year_level" class="form-label">Year Level</label>
                        <select class="form-select" name="year_level">
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year" selected>3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection