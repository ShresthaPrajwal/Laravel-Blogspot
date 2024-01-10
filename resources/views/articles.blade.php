@extends('home')
@section('content')
<div class="container d-flex flex-row my-5 px-0 mw-90 justify-content-end  rounded " style="background-color: #ffffff; color:#1c2331;">
    
    <div class="container mx-0 p-2  d-flex flex-column">

        <div class="container  mx-0 text-center text-danger">
            <h1>Some interesting topics to explore.</h1>
        </div>
        <div class="container mx-0">
            
                @foreach ( $paginated_articles as $article)
                <h3><div class="container p-2">{{ $article->title }}</div></h3>
                <div class="container p-2">{{ $article->text }}</div>
                @endforeach

        </div>

        
    </div>
    
</div>
@endsection