<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Link to your CSS files -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- You can add more CSS files if needed -->
</head>

<body>
    @include('layouts.navigation')
    <h1>Welcome to Breeze</h1>
</body>

</html>
