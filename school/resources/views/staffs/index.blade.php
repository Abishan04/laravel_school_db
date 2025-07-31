@extends('layouts.master')

@section('title', 'Index')

@section('content')
<section class="wrap__section ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-12 ">
                <div class="card mx-auto shadow bg-primary ">
                    <div class="card-body">
                        <h4 class="card-title text-center text-white mb-4">Index Staffs List</h4>

                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered bg-dark text-white  text-center mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Action</th>
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
                                    @foreach ($staffs as $staff)
                                        <tr>
                                            <td>
                                                <a href="/staffs/{{ $staff->id }}" class="btn btn-success btn-sm">Show</a>
                                            </td>
                                            <td>{{ $staff->id }}</td>
                                            <td>{{ $staff->registration_no }}</td>
                                            <td>{{ $staff->nic_no }}</td>
                                            <td>{{ $staff->first_name }}</td>
                                            <td>{{ $staff->last_name }}</td>
                                            <td>{{ $staff->full_name }}</td>
                                            <td>{{ $staff->gender }}</td>
                                            <td>{{ $staff->permanent_address }}</td>
                                            <td>{{ $staff->date_of_birth }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
