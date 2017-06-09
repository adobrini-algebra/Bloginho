<div class="blog-masthead">
  <div class="container">
    <nav>
        <ul class="nav blog-nav navbar-left">
            <li><a class="nav-link active" href="/">Home</a></li>
            <li><a class="nav-link" href="/page1">Page 1</a></li>
            <li><a class="nav-link" href="/posts/create">Page 2</a></li>
        </ul>
        <ul class="nav blog-nav navbar-right">
            @if (Auth::check())
                <li><a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a></li>
                <li><a class="nav-link" href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            @else
                <li><a class="nav-link" href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a class="nav-link" href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @endif
        </ul>
    </nav>
  </div>
</div>
