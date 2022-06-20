@extends('layout.master')
@section('title','aboutUs')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Home Page Content

                </h1>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h3>File Upload</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{url('/upload')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label" for="customFile">Default file input example</label>
                                            <input name="file" type="file" class="form-control" id="customFile" />
                                        </div>
                                        <button type="submit" class="btn btn-primary">Upload</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
