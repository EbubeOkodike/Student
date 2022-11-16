<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <h1>Create</h2>

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
            <form method="POST" enctype="multipart/form-data" autocomplete="on" autocapitalize="on"
                action="{{ url('createAccount') }}">

                @csrf
                <label class="form-label" for='firstname'>First Name:</label><br>
                <!--First Name Field-->
                <input class="form-input" type="text" name='firstname' id='firstname'
                    placeholder="First name"><br><br>

                <label class="form-label" for='lastname'>Last Name:</label><br>
                <!--Last Name Field-->
                <input class="form-input" type="text" name="lastname" id='lastname' placeholder='Last name'><br><br>

                <label class="form-label" for="email">Email address:</label><br>
                <!--Email Field-->
                <input class="form-input" type="email" name='email' id='email' placeholder='email'><br><br>

                <label class="form-label" for='date_of_birth'>Date of Birth:</label><br>
                <!--Date of Birth Field-->
                <input class="form-input" type="date" name='date_of_birth' id='date_of_birth'
                    placeholder="Date of Birth"><br><br>

                <label class="form-label" for='image'>Picture:</label><br>
                <!--Picture Field-->
                <input class="form-input" type="file" name='image' id="image"
                    placeholder="Your picture"><br><br>

                <label class="form-label" for='password'>Password:</label><br>
                <!--Password Field-->
                <input class="form-input" type="password" name='password' id='password' placeholder="password"><br><br>

                <input class="page-button" id="Submit" type="submit" value="Submit">
                <!--"Create" Button-->

            </form>
        </div>

</body>

</html>
