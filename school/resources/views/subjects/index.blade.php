@extends('layouts.master')

@section('title', 'Index')

@section('content')
<section class="wrap__section ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-12 ">
                <div class="card mx-auto shadow bg-primary ">
                    <div class="card-body">
                        <h4 class="card-title text-center text-white mb-4">Index Subject List</h4>

                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered bg-dark text-white  text-center mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Action</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Subject Name</th>
                                        <th scope="col">Subject Index</th>
                                        <th scope="col">Subject group</th>
                                        <th scope="col">Subject order</th>
                                        <th scope="col">Subject number</th>
                                        <th scope="col">is_compulsory</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects as $subject)
                                    <tr>
                                            <td><a href="/subjects/{{ $subject->id }}" class="btn btn-success btn-sm">Show</a></td>
                                            <td>{{ $subject->id }}</td>
                                            <td>{{ $subject->subject_name }}</td>
                                            <td>{{ $subject->subject_index }}</td>
                                            <td>{{ $subject->subject_group }}</td>
                                            <td>{{ $subject->subject_order }}</td>
                                            <td>{{ $subject->subject_number }}</td>
                                            <td>{{ $subject->is_compulsory ? 'Yes' : 'No' }}</td>
                                            <td>{{ $subject->created_at }}</td>
                                            <td>{{ $subject->updated_at }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                 {{-- <div class="d-flex justify-content-center">
  <a href="/students/create" class="btn btn-info mt-3 text-white btn-block">Create</a>
</div> --}}
            </div>
        </div>
    </div>
</section>
@endsection
