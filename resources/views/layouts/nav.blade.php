<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="/">
                <img src="{{ Vite::asset('public/images/assets/logo-bumdes-t.png') }}" alt="Logo" id="logo-navbar">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list fs-3"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Pelayanan">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('informasi') }}">Informasi</a>
                    </li>
                </ul>
                <a class="icon-link icon-link-hover link-offset-2 link-underline link-underline-opacity-0 text-dark fw-bold fs-6"
                    href="/login">
                    Log In
                    <i class="bi bi-box-arrow-in-right fs-5 d-flex"></i>
                </a>
            </div>
        </div>
    </nav>
</div>
