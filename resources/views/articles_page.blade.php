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
        <div class="container text-dark bg-white py-5 my-5">
            <h1 class="py-5 text-center">Articles</h1>
            <div class="container my-4">

                @foreach ( $articles as $article )
                    <div class="container my-5 d-flex flex-column border-bottom">
                        <div class="container">
                        
                            <h3>{{ $article->title }}</h3>
                        </div>
                        <div class="container  py-1">
                            {{ $article->text }}
                        </div>
                        <div class="container my-1 d-flex flex-row justify-content-between">
                            
                            <a href="{{ route('article.edit',$article->id) }}" class="btn btn-sm text-white" style="background-color:#546d9d ">Update</a>
                            
                            <form method="POST" action="{{ route('article.destroy',  $article->id ) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn text-white btn-sm" style="background-color:#d34710 " >
                                    <i class="bi bi-trash mx-1"></i>
                                </button>
                            </form>
                        </div>


                    </div>
                    
                    <!-- Display other properties of the article as needed -->
                @endforeach
            </div>
                
            <h1 class="py-5 text-center">...</h1>
        </div>
        @include('layouts.footer')

    </body>
</html>
