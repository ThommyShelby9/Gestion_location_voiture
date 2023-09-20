<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <title>@yield('title', 'Document')</title>
</head>
<body style="background-color:@yield('bg-color', '#fff')">

    @yield('content')


    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>