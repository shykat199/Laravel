@extends('layout.master')
@section('title','Contact Us')
@section('content')

<div class="container">

    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f093fb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <section>

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card-header">
                            Add New Student
                        </div>

                        <div class="card-body">

                            @if (Session::has('post_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('post_updated') }}
                                </div>
                            @endif

                            <form action="{{route('post.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $edata->id }}" />
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" name="first_name"
                                                   class="form-control form-control-lg" value="{{ $edata->first_name }}" />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" name="last_name"
                                                   class="form-control form-control-lg" value="{{ $edata->last_name }}" />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input type="date" name="dob" class="form-control form-control-lg" id="birthdayDate"
                                                   value="{{ $edata->dob }}" />
                                            <label for="birthdayDate" class="form-label">Birthday</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                                   value="Female" {{ isset($edata) ? ($edata->gender == 'Female' ? 'checked' : '') : '' }} />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                                   value="Male" {{ isset($edata) ? ($edata->gender == 'Male' ? 'checked' : '') : '' }} />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="otherGender"
                                                   value="Other" {{ isset($edata) ? ($edata->gender == 'Other' ? 'checked' : '') : '' }} />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="email" id="emailAddress" name="email"
                                                   class="form-control form-control-lg" value="{{ $edata->email }}" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="tel" id="phoneNumber" name="number"
                                                   class="form-control form-control-lg" value="{{ $edata->number }}" />
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">

                                        <select class="select form-control-lg" name="city">
                                            <option value="">Choose city</option>
                                            <option value="Khulna"
                                                {{ isset($edata) ? ($edata->city == 'Khulna' ? 'selected' : '') : '' }}>Khulna</option>
                                            <option value="Dhaka" {{ isset($edata) ? ($edata->city == 'Dhaka' ? 'selected' : '') : '' }}>
                                                Dhaka</option>
                                            <option value="Barisal"
                                                {{ isset($edata) ? ($edata->city == 'Barisal' ? 'selected' : '') : '' }}>Barisal</option>
                                        </select>
                                        <label class="form-label select-label">Choose option</label>

                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Update" />
                                </div>



                            </form>

                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>

@endsection

