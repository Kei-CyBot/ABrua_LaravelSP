@extends('layout')

@section('content')
<div class="card mx-auto" style="max-width: 600px;">
    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Student Profile</h4>
    </div>
    <div class="card-body">
        <h5 class="card-title">John Doe</h5>
        <h6 class="card-subtitle mb-2 text-muted">BS Information Technology</h6>
        
        <hr>
        
        <div class="row mb-2">
            <div class="col-sm-4 fw-bold">Email:</div>
            <div class="col-sm-8">john.doe@uic.edu.ph</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 fw-bold">Gender:</div>
            <div class="col-sm-8">Male</div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4 fw-bold">Year Level:</div>
            <div class="col-sm-8">3rd Year</div>
        </div>

        <div class="mt-4">
            <a href="{{ route('students.index') }}" class="btn btn-primary">Back to Student List</a>
        </div>
    </div>
</div>
@endsection