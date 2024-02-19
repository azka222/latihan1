<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                {{-- Cara mudah untuk membuat navbar aktif --}}
                <li class="nav-item {{ $title == 'Home' ? 'active' : '' }}">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item {{ $title == 'About Us' ? 'active' : '' }}">
                    <a class="nav-link" href="/aboutUs">About Us</a>
                </li>
                <li class="nav-item {{ $title == 'All Cars' ? 'active' : '' }}">
                    <a class="nav-link" href="/cars">Cars</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Brand
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/carBrand/Toyota">Toyota</a>
                        <a class="dropdown-item" href="/carBrand/Honda">Honda</a>
                        <a class="dropdown-item" href="/carBrand/Suzuki">Suzuki</a>
                        <a class="dropdown-item" href="/carBrand/Daihatsu">Daihatsu</a>
                        <a class="dropdown-item" href="/carBrand/Nissan">Nissan</a>
                        <a class="dropdown-item" href="/carBrand/Hyundai">Hyundai</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/carCategory/SUV">SUV</a>
                        <a class="dropdown-item" href="/carCategory/MPV">MPV</a>
                        <a class="dropdown-item" href="/carCategory/LCGC">LCGC</a>
                    </div>
                </li>
                <li class="nav-item {{ $title == 'User Information' ? 'active' : '' }}">
                    <a class="nav-link " href="/accountInfo">Account</a>
                </li>
                <li class="nav-item">
                    @guest
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @else
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
                    @endguest
                </li>

            </ul>
        </div>
    </div>
</nav>
