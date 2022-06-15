@extends('layout.master')
@section('title','Contact Us')
@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="container">

                @if (Session::has('post_deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('post_deleted') }}
                    </div>
                @endif

                <div class="container">

                    <a style="float: right" href="{{route('post.add')}}" type="button" class="btn btn-info mt-2 mb-2 mr-2">Add Student </a>

                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">City</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number</th>
                        <th scope="col">Action</th>


                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $data)
                        <tr>
                            <th>{{ $i++ }}</th>
                            <th>{{ $data->first_name }}</th>
                            <td>{{ $data->last_name }}</td>
                            <td>{{ $data->city }}</td>
                            <td>{{ $data->dob }}</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->number }}</td>
                            <td>
                                <a class="btn btn-warning" href="/show_student/{{ $data->id }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>&nbsp;&nbsp;
                                <a class="btn btn-danger" href="/delet_student/{{ $data->id }}">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>


@endsection

