    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">Home</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse justify-content-between"
            id="navbarSupportedContent"
        >
        <ul class="navbar-nav">
            @can('is-admin')
                <li class="ms-3">
                    <a class="nav-link active" aria-current="page" href="{{ route('manage.orders') }}">Manage orders</a>
                </li>
                <li class="ms-3">
                    <a class="nav-link active" aria-current="page" href="{{ route('manage.cities') }}">Manage cities</a>
                </li>
                <li class="ms-3">
                    <a class="nav-link active" aria-current="page" href="{{ route('manage.restaurants') }}">Manage restaurants</a>
                </li>
                <li class="ms-3">
                    <a class="nav-link active" aria-current="page" href="{{ route('manage.dishes') }}">Manage dishes</a>
                </li>
            @else
                <li class="ms-3">
                    <a class="nav-link active" aria-current="page" href="{{ route('show.basket') }}">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="19"
                            height="19"
                            fill="currentColor"
                            class="bi bi-cart d-flex"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"
                            />
                        </svg>
                    </a>
                </li>
            @endcan
        </ul>
            <ul class="navbar-nav">

                @if (Auth::check())
                    <li class="nav-item me-2">
                        <a class="nav-link" href="{{ route('logout') }}">{{Auth::user()->name}}, log out</a>
                    </li>
                @else
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="{{route('login')}}"
                        >Log in</a>
                    </li>
                    <li class="nav-item me-2">
                        <a
                        class="nav-link active"
                        aria-current="page"
                        href="{{route('register')}}"
                        >Register</a>
                    </li>
                @endif
            </ul>
        </div>
        </div>
    </nav>
