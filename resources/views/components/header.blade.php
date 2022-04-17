<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$a}} Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="css/my.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body class="antialiased">
<div id="header">   
    <div class="container">
    <div class="row">
            <div id="logo" class="col-md-3">
             <a href="/"><img src="/images/logo-italian-grey.png" alt="logo"></a>
            </div>
            <div class="col-md-9">
            <div class="nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="rules">Rules</a></li>
                    <li><a href="login">Login</a></li>
                </ul>
            </div>
            </div>
    </div>
    </div>
</div>
<div class="breadcrumbs">
            {{ Breadcrumbs::render() }}
</div>
