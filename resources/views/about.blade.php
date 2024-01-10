<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
        
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Popper JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        .{
            box-sizing: border-box
        }
        </style>
        
    </head>
    <body style="background-color:  #1c2331">
        @include('layouts.navbar')
        @include('layouts.about_content')
        @include('layouts.about2')
        {{-- @include('layouts.about2') --}}
        @include('layouts.footer')







        {{-- <div class="container-fluid">
            
        </div>
        
        <div class="container-fluid">
            <h1 class='text-warning'>Admin</h1>
        </div>
        {{-- <div class="container"></div>
        <div class="row mx-1 bg-success" >
            <div class="col-sm-4 px-1 bg-warning">.col-sm-4</div>
            <div class="col-sm-4 px-1  bg-danger">.col-sm-4</div>
            <div class="col-sm-4 px-1  bg-primary">.col-sm-4</div>
        </div> --}}
        {{-- <div class="text-left m-1"> 
            <img src="{{ asset('images/me.jpg') }}" alt="me" class="img-rounded mx-auto">
        </div>
        <div class="text-left m-1"><button class="btn-primary btn-lg">Like</button></div>
        
         --}} 
    </body>
</html>
