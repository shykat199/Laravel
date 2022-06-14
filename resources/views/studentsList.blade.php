<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
