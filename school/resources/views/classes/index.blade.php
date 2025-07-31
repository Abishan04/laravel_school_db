@extends('layouts.master')

@section('title', 'Index')

@section('content')
<section class="wrap__section ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-12 ">
                <div class="card mx-auto shadow bg-primary ">
                    <div class="card-body">
                        <h4 class="card-title text-center text-white mb-4">Index Classes List</h4>

                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered bg-dark text-white  text-center mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Action</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Class group</th>
                                        <th scope="col">Class order</th>
                                        <th scope="col">print name</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($classes as $class)
                                    <tr>
                                            <td><a href="/classes/{{ $class->id }}" class="btn btn-success btn-sm">Show</a></td>
                                            <td>{{ $class->id }}</td>
                                            <td>{{ $class->class_group }}</td>
                                            <td>{{ $class->class_order }}</td>
                                            <td>{{ $class->print_name }}</td>
                                            <td>{{ $class->created_at }}</td>
                                            <td>{{ $class->updated_at }}</td>

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
