<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('admin.category.index') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('admin.product.index') }}">Products</a>
                    </li>
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
        </div>
</nav>
<div class="profile">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('client.order') }}">Order</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('contacts.contact') }}">Contact</a>
        </li>
        @if (Auth::check())
            <li class="nav-item">
                <a href="{{ route('account.updatePassword') }}" class="nav-link">
                    Setting
                </a>
            </li>
        @endif
    </ul>
</div>
</div>
