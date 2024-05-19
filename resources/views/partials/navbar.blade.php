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
        </div>
    </div>
</nav>
