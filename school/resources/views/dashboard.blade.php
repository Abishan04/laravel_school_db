@extends('layouts.master')

@section('content')
@role('admin')
    <h1>Admin Dashboard</h1>
@endrole
@role('student')
    <h1>Student Dashboard</h1>
@endrole
@endsection
