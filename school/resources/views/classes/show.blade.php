@extends('layouts.master')

@section('content')
    <section class="py-4">
        <div class="container">
            <div class="card bg-primary  mx-auto shadow">
                <div class="card-body col-md-12 mx-auto">

                        <h4 class="card-title text-center text-white mb-3">{{ $class->class_name }} Details</h4>
                    <!-- Grade Info Table -->

                    <div class="table-responsive mt-2">
                        <table class="table table-bordered table-hover text-center ">
                            <tbody>
                                <tr>
                                    <th scope="col">Id</th>
                                    <td>{{ $class->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Class Name</th>
                                    <td>{{ $class->class_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Class Group</th>
                                    <td>{{ $class->class_group }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Class order</th>
                                    <td>{{ $class->class_order }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">print name</th>
                                    <td>{{ $class->print_name }}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h4 class="card-title text-center text-white my-3">{{ $class->class_name }} Subjects List</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-dark text-center mt-2">
                            <tbody>
                                <tr>

                                    <th scope="col">Id</th>

                                    <th scope="col">Subject Name</th>
                                    <th scope="col">Subject Index</th>
                                    <th scope="col">Subject group</th>
                                    <th scope="col">Subject order</th>
                                    <th scope="col">Subject number</th>
                                    <th scope="col">is_compulsory</th>
                                </tr>
                                <tr>
                                    @foreach ($subjects as $subject)
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



                    <h4 class="card-title text-center text-white mb-3">{{ $class->class_name }} Teachers List</h4>
                    <!-- Grade Info Table -->
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered table-hover text-center ">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Registration No</th>
                                    <th scope="col">Nic No</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">gender</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">date of birth</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $teacher->id }}</td>
                                        <td>{{ $teacher->registration_no }}</td>
                                        <td>{{ $teacher->nic_no }}</td>
                                        <td>{{ $teacher->first_name }}</td>
                                        <td>{{ $teacher->last_name }}</td>
                                        <td>{{ $teacher->full_name }}</td>
                                        <td>{{ $teacher->gender }}</td>
                                        <td>{{ $teacher->permanent_address }}</td>
                                        <td>{{ $teacher->date_of_birth }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h4 class="card-title text-center text-white mb-3">{{ $class->class_name }} Students List</h4>
                    <!-- Grade Info Table -->
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered table-hover text-center ">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Admission No</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">gender</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->admission_no }}</td>
                                        <td>{{ $student->first_name }}</td>
                                        <td>{{ $student->last_name }}</td>
                                        <td>{{ $student->gender }}</td>
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
