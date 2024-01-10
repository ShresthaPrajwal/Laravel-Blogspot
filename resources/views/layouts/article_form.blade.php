<div class="container d-flex flex-column my-5 mw-90 text-center text-white" style="background-color: #1c2331">
    <div class="container py-3"><h2>Create an Article Here.</h2></div>
    <div class="container">
        <form method="post" class="d-flex flex-column" action="{{ route('article.store') }}">
            @csrf
            <input name='title' type='text' placeholder="Title here" class="form-control my-1" rows="2"></input>
            <textarea name='text' type='text' class="form-control my-1" rows="3" placeholder="Text Here"></textarea>
            <button type="submit" class="btn btn-secondary my-1"><h4>Post</h4></button>
        </form>
    </div>
</div>