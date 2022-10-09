<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 table-responsive">
            <h1 class="mt-4">Buku</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Buku</li>
            </ol>

            <!-- <a href="#" class="btn btn-primary">Tambah Buku</a> -->

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td scope="">#</td>
                        <td scope="">Judul</td>
                        <td scope="">Pengarang</td>
                        <td scope="">Penerbit</td>
                        <td scope="">Year</td>
                        <td scope="">Action</td>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($allBuku as $buku) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $buku['Title'] ?></td>
                            <td><?= $buku['Author'] ?></td>
                            <td><?= $buku['Publisher'] ?></td>
                            <td><?= $buku['Year'] ?></td>
                            <td>
                                <a href="<?= base_url("Admin/detailBuku/$buku[ID]") ?>" class="btn btn-info"><i class="far fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>

        </div>
    </main>
</div>