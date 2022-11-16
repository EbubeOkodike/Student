<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit {{ $student->id }}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <h1>Update {{ $student->id }}'s Records</h1>

    <hr>

    @if ($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

    <div class="form-container">
        <form method="POST" autocomplete="on" autocapitalize="on" action="{{ url('store') }}">

            @csrf
            <label class="form-label" for='firstname'>First Name:</label><br>
            <!--First Name Field-->
            <input class="form-input" type="text" name='firstname' id='firstname' placeholder="First name"
                value="{{ $student->firstname }}"><br><br>

            <label class="form-label" for='lastname'>Last Name:</label><br>
            <!--Last Name Field-->
            <input class="form-input" type="text" name="lastname" id='lastname' placeholder='Last name'
                value="{{ $student->lastname }}"><br><br>

            <label class="form-label" for="email">Email address:</label><br>
            <!--Email Field-->
            <input class="form-input" type="email" name='email' id='email' placeholder='email'
                value="{{ $student->email }}"><br><br>

            <label class="form-label" for='date_of_birth'>Date of Birth:</label><br>
            <!--Date of Birth Field-->
            <input class="form-input" type="date" name='date_of_birth' id='date_of_birth' placeholder="Date of Birth"
                value="{{ $student->date_of_birth }}"><br><br>

            <label class="form-label" for='pic'>Picture:</label><br>
            <!--Picture Field-->
            <input class="form-input" type="image" name='pic' id='pic' placeholder="Picture"
                value="{{ Storage::url($student->image) }}"><br><br>

            <label class="form-label" for='password'>Password:</label><br>
            <!--Password Field-->
            <input class="form-input" type="password" name='password' id='password' placeholder="password"
                "><br><br>

            <input class="page-button" id="Submit" type="submit" value="Update">
            <!--"Update" Button-->

        </form>
    </div>

</body>

</html>
