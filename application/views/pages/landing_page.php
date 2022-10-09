<div class="container">
    <h1 class="mt-5 text-center">Daftar buku perpustakaan FTI Unmer Malang</h1>

    <a href="<?= base_url('Buku/add') ?>" class="btn btn-primary">Tambah Buku</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($bukus as $buku) {
            ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $buku['judul'] ?></td>
                    <td><?= $buku['penerbit'] ?></td>
                    <td class="">
                        <a href="<?= base_url("Buku/update/$buku[id]") ?>" class="btn btn-success">update</a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus?')" href="<?= base_url("Buku/delete/$buku[id]") ?>" class="btn btn-danger">delete</a>
                    </td>
                </tr>
            <?php
                $i++;
            }
            ?>

        </tbody>
    </table>
</div>