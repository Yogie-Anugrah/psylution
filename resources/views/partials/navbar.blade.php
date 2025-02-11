{{-- <nav class="navbar navbar-expand-lg" style="background-color: #cfe2ff; height: 80px; border-bottom: 2px solid black;">
    <div class="container-fluid d-flex justify-content-between">
        <div class="logo bg-white" style="width: 60px; height: 60px;"></div>
        <div class="menu bg-primary" style="width: 60px; height: 60px;"></div>
    </div>
</nav> --}}

{{-- <nav class="navbar navbar-expand-lg" style="background-color: #cfe2ff; height: 80px; border-bottom: 2px solid black;">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('images/header-logo.jpg') }}" alt="Logo" style="width: 60px; height: 60px; object-fit: contain;">
        </div>

        <!-- Menu Placeholder -->
        <div class="menu bg-primary" style="width: 60px; height: 60px;"></div>
    </div>
</nav> --}}


<nav class="navbar navbar-expand-lg" style="background-color: #cfe2ff; height: 80px; border-bottom: 2px solid black;">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/header-logo.jpg') }}" alt="Logo" style="width: 60px; height: 60px; object-fit: contain;">
        </a>

        <!-- Navigation Links -->
        <div class="d-none d-lg-flex"> <!-- Visible on larger screens -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="/konseling">Konseling</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="/psikolog-kami">Psikolog Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="/testimoni">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-bold" href="/about-us">Tentang Kami</a>
                </li>
            </ul>
        </div>

        <!-- Login/Register Button -->
        <div class="menu">
            <a href="/login" class="btn btn-primary fw-bold px-4 py-2">Login / Register</a>
        </div>
    </div>
</nav>

