<header class="bg-dark d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0 text-white">
        <h2>To-Do</h2>
    </div>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 text-center">
        <li><a href="/" class="nav-link px-2">Home</a></li>
    </ul>
    @auth()
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger text-white">
            Logout
        </button>
    </form>
    @endauth
    @guest()
    <div class="col-md-3 text-end">
        <a class="btn btn-success" href="{{ route('register') }}">Sign up</a>
        <a class="btn btn-info" href="{{ route('login') }}">Sign in</a>
    </div>
    @endguest
</header>
