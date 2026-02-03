@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        
        <h2 class="mb-4 text-center" style="color: #4a3b2a; font-weight: bold;">Register New Student</h2>

        <div class="card shadow-lg border-0" style="background-color: #fff;">
            <div style="height: 5px; background-color: #bc6c25; border-radius: 5px 5px 0 0;"></div>
            
            <div class="card-body p-5">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf 

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold" style="color: #4a3b2a;">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" 
                               placeholder="Enter Full Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold" style="color: #4a3b2a;">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" 
                               placeholder="name@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label fw-bold" style="color: #4a3b2a;">Gender</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="course" class="form-label fw-bold" style="color: #4a3b2a;">Course</label>
                        <input type="text" class="form-control" id="course" name="course" 
                               placeholder="e.g. BSIT" required>
                    </div>

                    <div class="mb-3">
                        <label for="year_level" class="form-label fw-bold" style="color: #4a3b2a;">Year Level</label>
                        <select class="form-select" id="year_level" name="year_level" required>
                            <option value="" disabled selected>Select Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary px-4">Cancel</a>
                        <button type="submit" class="btn btn-edit px-4">Save Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection