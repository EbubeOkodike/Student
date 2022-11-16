<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student {{ $student->id }}</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>

<body>
    <h1>{{ $student->firstname }} {{ $student->lastname }}'s profile</h2>
        <img src="/images/{{ $student->image }}" alt="{{ $student->firstname }} {{ $student->lastname }} pic">
</body>

</html>
