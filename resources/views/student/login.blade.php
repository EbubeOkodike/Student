<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <h1>Login</h2>

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
            <form method="POST" autocomplete="on" autocapitalize="on" action="{{ url('authenticate') }}">

                @csrf
                <label class="form-label" for="email">Email address:</label> <br>
                <!--Email Field-->
                <input class="form-input" type="email" name='email' id='email' placeholder='email'><br><br>

                <label class="form-label" for='password'>Password:</label> <br>
                <!--Password Field-->
                <input class="form-input" type="password" name='password' id='password' placeholder="password"><br><br>

                <input class="page-button" id="Submit" type="submit" value="Submit">
                <!--"Create" Button-->

            </form>
        </div>

</body>

</html>
