<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"> Data User</li>
            </ol>

            <?php
            if ($this->session->flashdata('message')) {
                echo $this->session->flashdata('message');
            }
            ?>

            <a href="<?= base_url('Admin/addUser') ?>" class="btn btn-primary">Tambah User</a>

            <div class="tabel mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Level</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($allUser as $user) :
                        ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $user['Name'] ?></td>
                                <td>
                                    <?php
                                    if ($user['Status'] == 1) {
                                        echo "<span class='badge bg-primary'>Admin</span>";
                                    } else if ($user['Status'] == 2) {
                                        echo "<span class='badge bg-success'>User</span>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url("Admin/update/$user[UserID]") ?>" class="btn btn-success">Update</a> |
                                    <a onclick="return confirm('Apakah ada akan menghapus?')" href="<?= base_url("Admin/delete/$user[UserID]") ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>