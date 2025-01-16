<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('gambar/logoSMAM.png') }}" alt="Logo" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}"
                        href="{{ route('welcome') }}">INFORMASI SEKOLAH</a>
                </li>
                <li class="nav-item">   
                    <a class="nav-link {{ request()->routeIs('berita') ? 'active' : '' }}"
                        href="{{ url('berita') }}">BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('ekstrakurikuler') ? 'active' : '' }}"
                        href="{{ route('ekstrakurikuler') }}">EKSTRAKURIKULER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tenagapendidik') ? 'active' : '' }}"
                        href="{{ route('tenagapendidik') }}">TENAGA PENDIDIK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('fasilitas') ? 'active' : '' }}"
                        href="{{ route('fasilitas') }}">FASILITAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}"
                        href="{{ route('kontak') }}">KONTAK</a>
                </li>
            </ul>
        </div>
    </div>
</nav>