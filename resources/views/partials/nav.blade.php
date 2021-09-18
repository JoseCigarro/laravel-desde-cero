<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            José Cigarro
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar"
            aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                </path>
            </svg>

        </button>

        <div class="collapse navbar-collapse d-flex justify-content-end" id="bdNavbar">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">
                        {{ __('Home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">{{ __('About') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('projects.*') }}"
                        href="{{ route('projects.index') }}">{{ __('Projects') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('contact') }}"
                        href="{{ route('contact') }}">{{ __('Contact') }}
                    </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">{{ __('Login') }}
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</nav>
