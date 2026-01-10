@extends('layout')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome to the Student Portal</h1>
        <p class="col-md-8 fs-4 mx-auto">
           Streamline your administrative workflow with this centralized hub. Effortlessly browse the complete roster, enroll new candidates, and maintain accurate academic profiles in real-time.
        </p>
        <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg" type="button">Go to Student List</a>
    </div>
</div>
@endsection