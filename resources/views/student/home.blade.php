<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <h1>Home</h1>
    <div class="table-container">
        <table>
            <th>Student Id</th>
            <th>Profile Pic</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Admitted</th>
            <th>Action</th>

            @foreach ($students as $student)
                <tr>
                    <td> {{ $student->id }} </td>
                    <td> <img src="{{ Storage::url($student->image) }}"
                            alt="{{ $student->firstname }} {{ $student->lastname }} pic" width="100px"> </td>
                    <td> {{ $student->firstname }} </td>
                    <td> {{ $student->lastname }} </td>
                    <td> {{ $student->email }} </td>
                    <td> {{ $student->date_of_birth }} </td>
                    <td> {{ $student->created_at }} </td>
                    <td>
                        <a href='{{ url('edit', $student->id) }}'><button class="crud-button">Edit</button></a>
                        <a href='{{ url('expel', $student->id) }}'><button class="crud-button">Expel</button></a>
                        <a href='{{ url('view', $student->id) }}'><button class="crud-button">View</button></a>
                    </td>
                </tr>
            @endforeach

        </table>
        <a href='register'><button class="page-button">Create</button></a>

        <a href='login'><button class="page-button">Login</button></a>
    </div>
</body>

</html>
