<nav class="navbar navbar-dark navbar-expand-lg bg-danger ">
    <div class="container">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'home' ? 'activ' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'about' ? 'activ' : '' }}" href="/about">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'posts' ? 'activ' : '' }}" href="/posts">blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'categories' ? 'activ' : '' }}" href="/categories">categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i
                                        class="bi bi-layout-text-sidebar-reverse"></i>my dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i
                                        class="bi bi-box-arrow-right"></i>logout</button>
                            </form>
                        </ul>
                    </li>
                @else
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/login" class="nav-link"> <i class="bi bi-box-arrow-right"></i> login</a>
                        </li>
                    </ul>
                @endauth
            </ul>
        </div>
    </div>
</nav>
