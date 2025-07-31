@extends('layouts.master')

@section('content')
<section class="py-4">

    <div class="container">
        <div class="card bg-primary  mx-auto shadow">
            <div class="card-body col-md-12 mx-auto">
                <h4 class="card-title text-center text-white my-3">{{ $subject->subject_name }} Details</h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-dark text-center mt-2">
                      <tbody>
                            <tr>
                                        <th scope="col">Id</th>
                                         <td>{{ $subject->id }}</td>
                                         </tr>
                                        <th scope="col">Subject Name</th>
                                            <td>{{ $subject->subject_name }}</td>
                                        </tr>
                                        <th scope="col">Subject Index</th>
                                              <td>{{ $subject->subject_index }}</td>
                                        </tr>
                                        <th scope="col">Subject group</th>
                                            <td>{{ $subject->subject_group }}</td>
                                        </tr>
                                        <th scope="col">Subject order</th>
                                            <td>{{ $subject->subject_order }}</td>
                                        </tr>
                                        <th scope="col">Subject number</th>
                                            <td>{{ $subject->subject_number }}</td>
                                        </tr>
                                        <th scope="col">is_compulsory</th>
                                            <td>{{ $subject->is_compulsory ? 'Yes' : 'No' }}</td>
                                        </tr>
                              </tbody>


                    </table>
                </div>


                   <h4 class="card-title text-center text-white mb-3">{{ $subject->subject_name }} Classes List</h4>
                <!-- Grade Info Table -->
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-hover text-center ">
                        <thead class="table-dark">
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
    <h4 class="card-title text-center text-white mb-3">{{ $subject->subject_name }} Teachers List</h4>
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
                                    <td>{{ $teacher->permanent_address  }}</td>
                                    <td>{{ $teacher->date_of_birth }}</td>
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
