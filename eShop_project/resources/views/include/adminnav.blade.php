<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="{{ route('admin.category.index') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="{{ route('admin.product.index') }}">Products</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('account.logout') }}">Logout</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">Hi {{ Auth::user()->name }}</span>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('account.login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('account.register') }}">Register</a>
                    </li>
                @endif
            </ul>
        </div> --}}
        <ul class="nav nav-underline">
            <a class="navbar-brand" href="/">Home</a>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('admin.category.index') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.product.index') }}">Products</a>
            </li>

            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('account.logout') }}">Logout</a>
                </li>

                <li class="nav-item">
                    <span class="nav-link">Hi {{ Auth::user()->name }}</span>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('account.login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('account.register') }}">Register</a>
                </li>
            @endif
        </ul>
        <div class="profile">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('client.contact') }}">Contact</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('client.order') }}">
                            <i class="bi bi-cart4"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bag-heart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('account.updatePassword') }}" class="nav-link">
                            <i class="bi bi-key"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
