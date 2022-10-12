<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    .inner::-webkit-scrollbar{
        display: none;
    }
    .innerForForm::-webkit-scrollbar{
        display: none;
    }
    </style>
</head>
<body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link ml-3 mr-3 text-white" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3 text-white" href="{{route('register')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-3 text-white" href="{{route('view')}}">View</a>
                </li>
            </ul>
        </div>
    </nav>