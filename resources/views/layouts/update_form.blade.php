@extends('update_page')

@section('update_form')

<div class="container d-flex flex-column my-5 mw-90 text-center text-white" style="background-color: #1c2331">
    <div class="container py-3"><h2>Update the Article Here.</h2></div>
    <div class="container">
        <form method="post" class="d-flex flex-column" action="{{ route('article.update',$article_id) }}">
            
            @csrf
            @method('PUT')
            <input name='title' type='text' placeholder="Title Here" value="{{ $title }}" class="form-control my-1" rows="2"></input>
            <textarea name='text' type='text' class="form-control my-1" rows="3"  value="" placeholder="Text Here">{{ $text }}</textarea>
            <button type="submit" class="btn btn-info my-1"><h4>Update</h4></button>
        </form>
    </div>

</div>
@endsection