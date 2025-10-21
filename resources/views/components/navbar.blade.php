<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard', ['username' => request('username', 'Guest')]) }}">
            Kos Putra Makmur
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard', ['username' => request('username', 'Guest')]) }}">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengelolaan', ['username' => request('username', 'Guest')]) }}">
                        Pengelolaan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile', ['username' => request('username', 'Guest')]) }}">
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ route('login') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>