<nav class="navbar navbar-expand-sm " style="background-color: #1c2331">
    <div class="container-fluid">
      <div class="navbar-header">
        <h1 class="text-warning" style="text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);">Personal Blog</h1>
      </div>
      <ul class="nav navbar-nav text" style="font-size: 24px;">
        <li class="active mx-2"><a href="{{ route('home') }}" class="text-white" >Home</a></li>
        <li class="mx-2"><a href=" {{ route('article.index') }} " class="text-white">Articles</a></li>
        <li class="mx-2"><a href="{{ route('about') }}" class="text-white">About</a></li>
      </ul>
    </div>
  </nav>