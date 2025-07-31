@extends('layouts.master')

@section('content')
    <section class="py-4">
        <div class="container">
            <div class="card bg-primary  mx-auto shadow">
                <div class="card-body col-md-12 mx-auto">
                    <h4 class="card-title text-center text-white mb-3">{{ $teacher->first_name }} Details</h4>
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered table-hover text-center ">
                            <tbody>
                                <tr>
                                    <th scope="col">Id</th>
                                    <td>{{ $teacher->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Registration No</th>
                                    <td>{{ $teacher->registration_no }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Nic No</th>
                                    <td>{{ $teacher->nic_no }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <td>{{ $teacher->first_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Last Name</th>
                                    <td>{{ $teacher->last_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <td>{{ $teacher->full_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">gender</th>
                                    <td>{{ $teacher->gender }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Address</th>
                                    <td>{{ $teacher->permanent_address }}</td>
                                </tr>
                                <tr></tr>
                                <th scope="col">date of birth</th>
                                <td>{{ $teacher->date_of_birth }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <h4 class="card-title text-center text-white my-3">{{ $teacher->first_name }} Subjects List</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-dark text-center mt-2">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Subject Index</th>
                                    <th scope="col">Subject group</th>
                                    <th scope="col">Subject order</th>
                                    <th scope="col">Subject number</th>
                                    <th scope="col">is_compulsory</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subjects as $subject)
                                    <tr>
                                        <td>{{ $subject->id }}</td>
                                        <td>{{ $subject->subject_name }}</td>
                                        <td>{{ $subject->subject_index }}</td>
                                        <td>{{ $subject->subject_group }}</td>
                                        <td>{{ $subject->subject_order }}</td>
                                        <td>{{ $subject->subject_number }}</td>
                                        <td>{{ $subject->is_compulsory ? 'Yes' : 'No' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <h4 class="card-title text-center text-white mb-3">{{ $teacher->first_name }} Classes List</h4>
                    <!-- Grade Info Table -->
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered table-hover table-dark text-center ">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Class Name</th>
                                    <th scope="col">Class Group</th>
                                    <th scope="col">Class order</th>
                                    <th scope="col">print name</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classes as $class)
                                    <tr>
                                        <td>{{ $class->id }}</td>
                                        <td>{{ $class->class_name }}</td>
                                        <td>{{ $class->class_group }}</td>
                                        <td>{{ $class->class_order }}</td>
                                        <td>{{ $class->print_name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
