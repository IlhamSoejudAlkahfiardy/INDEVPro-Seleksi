<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="<?= base_url() ?>assets/sb-admin/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center mt-5">
                        <?php
                        if ($this->session->flashdata('message')) {
                            echo $this->session->flashdata('message');
                        }
                        ?>

                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-dark text-light">
                                    <h2 class="text-center font-weight-light my-4">Login</h2>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('Auth/login') ?>" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="nama" type="text" placeholder="name@example.com" name="nama" required />
                                            <label for="nama">Nama</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" type="password" placeholder="Password" name="password" required />
                                            <label for="password">Kata Sandi</label>
                                        </div>
                                        <!-- <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div> -->
                                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                            <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                            <button type="submit" class="btn btn-dark">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?= base_url('Auth/register') ?>">Belum memiliki akun? Daftar</a></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-center small">
                        <div class="text-muted">FTI Unmer Malang &copy; Ilham Soejud A 2022</div>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/sb-admin/js/scripts.js"></script>
</body>

</html>