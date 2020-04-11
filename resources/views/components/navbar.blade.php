<header>
    <nav>
        <div class="nav-logo">
            <a href="/">Let's Crack IT</a>
        </div>
        <div class="nav-links">
            <span>
                <a href="/">Home</a>
            </span>
            <span>
                <a href="/about">About</a>
            </span>
            <span>
                <a href="/docs">Get Started</a>
            </span>
            <span>
                @if(Auth::check())
                    <a href="/profile">{{Auth::user()->name}}</a>
                @else
                    <a href="/login">Login</a>
                @endif
            </span>
        </div>
        <div class="burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>
