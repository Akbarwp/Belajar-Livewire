<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand fw-bold text-danger" href="/">Livewire</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('properti') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Properti
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('properti') }}#input">Input</a></li>
                        <li><a class="dropdown-item" href="#radio">Radio</a></li>
                        <li><a class="dropdown-item" href="#select">Select</a></li>
                        <li><a class="dropdown-item" href="#checkbox">Checkbox</a></li>
                        <li><a class="dropdown-item" href="#click">Click</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produk') }}">Produk</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('artikel') }}">Artikel</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('karyawan') }}">Karyawan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('karyawan2') }}">Karyawan2</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
