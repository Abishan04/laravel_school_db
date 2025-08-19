@extends('layouts.main')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Admission No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Date of Birth</th>
                        <th>NIC No</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Admission No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Date of Birth</th>
                        <th>NIC No</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->admission_no }}</td>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->class->class_name }}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->stu_nic_no }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
