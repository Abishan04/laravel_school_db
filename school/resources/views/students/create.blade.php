@extends('layouts.master')
@section('content')

    <h1>Student Create</h1>

    <form action="/students" method="post">
        @csrf
        <div class="form-group">
            <label for="admission_no">Admission No</label>
            <input type="text" name="admission_no" id="admission_no" class="form-control">
        </div>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" id="gender" class="form-control">
        </div>
        <div class="form-group"></div>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control">
        </div>
        <div class="form-group">
            <label for="class">Class</label>
            <input type="text" name="class" id="class" class="form-control">
        </div>
        <div class="form-group">
            <label for="section">Section</label>
            <input type="text" name="section" id="section" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
