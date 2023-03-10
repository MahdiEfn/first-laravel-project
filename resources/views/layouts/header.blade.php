<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">No Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">No Link</a>
                </li>
            </ul>

            @if(auth()->check())
                @if(Auth::user()->is_admin || Auth::user()->has_permission)
                    <a href="/admin/articles" class="btn btn-info">Panel</a>
                @endif
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn-danger">logout</button>
                </form>
            @else
                <a href="{{ route('register') }}" class="btn btn-info">sign in</a>
                <a href="{{ route('login') }}" class="btn btn-info">login</a>
            @endif
        </div>
    </div>
</nav>
