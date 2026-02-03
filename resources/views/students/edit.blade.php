@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        
        <h2 class="mb-4 text-center" style="color: #4a3b2a; font-weight: bold;">Edit Student Details</h2>

        <div class="card shadow-lg border-0" style="background-color: #fff;">
             <div style="height: 5px; background-color: #bc6c25; border-radius: 5px 5px 0 0;"></div>

            <div class="card-body p-5">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT') 

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold" style="color: #4a3b2a;">Full Name</label>
                        <input type="text" class="form-control" name="name" 
                               value="{{ $student->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold" style="color: #4a3b2a;">Email Address</label>
                        <input type="email" class="form-control" name="email" 
                               value="{{ $student->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label fw-bold" style="color: #4a3b2a;">Gender</label>
                        <select class="form-select" name="gender" required>
                            <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="course" class="form-label fw-bold" style="color: #4a3b2a;">Course</label>
                        <input type="text" class="form-control" name="course" 
                               value="{{ $student->course }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="year_level" class="form-label fw-bold" style="color: #4a3b2a;">Year Level</label>
                        <select class="form-select" name="year_level" required>
                            <option value="1st Year" {{ $student->year_level == '1st Year' ? 'selected' : '' }}>1st Year</option>
                            <option value="2nd Year" {{ $student->year_level == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                            <option value="3rd Year" {{ $student->year_level == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                            <option value="4th Year" {{ $student->year_level == '4th Year' ? 'selected' : '' }}>4th Year</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary px-4">Cancel</a>
                        <button type="submit" class="btn text-white px-4" style="background-color: #bc6c25;">
                            Update Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection