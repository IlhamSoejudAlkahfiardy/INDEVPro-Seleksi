<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <!-- Administration -->

                <div class="sb-sidenav-menu-heading">Administrator</div>
                <a class="nav-link" href="<?= base_url('Admin') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDashboard" aria-expanded="false" aria-controls="collapseDashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-list-ul"></i></i></div>
                    Menu
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>

                <div class="collapse" id="collapseDashboard" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('Admin/user') ?>">User</a>
                        <a class="nav-link" href="<?= base_url('Admin/buku') ?>">Buku</a>
                        <a class="nav-link" href="<?= base_url('Admin/author') ?>">Author</a>
                        <a class="nav-link" href="<?= base_url('Admin/kategori') ?>">Kategori</a>
                        <a class="nav-link" href="<?= base_url('Admin/member') ?>">Member</a>
                        <a class="nav-link" href="<?= base_url('Admin/publisher') ?>">Publisher</a>
                        <a class="nav-link" href="<?= base_url('Admin/tipe') ?>">Tipe Buku</a>
                    </nav>
                </div>

                <!-- User -->

                <div class="sb-sidenav-menu-heading">User</div>
                <a class="nav-link" href="<?= base_url('Admin') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Log Login User
                </a>
                <a class="nav-link" href="<?= base_url('Admin') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-check-square"></i></div>
                    Pengembalian
                </a>
                <a class="nav-link" href="<?= base_url('Admin') ?>">
                    <div class="sb-nav-link-icon"><i class="far fa-square"></i></div>
                    Peminjaman
                </a>

                <!-- Activity -->

                <div class="sb-sidenav-menu-heading">Activity</div>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?= $sesi; ?>
        </div>
    </nav>
</div>