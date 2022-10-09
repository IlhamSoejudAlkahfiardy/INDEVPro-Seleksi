<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Perpustakaan FTI Unmer Malang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('User') ?>"><span class="btn btn-outline-primary">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('User#buku') ?>"><span class="btn btn-outline-primary">Buku</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="btn btn-outline-primary">Akun</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Daftar Member</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url('User/logout') ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex ml-5" action="<?= base_url('User/cari') ?>" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>