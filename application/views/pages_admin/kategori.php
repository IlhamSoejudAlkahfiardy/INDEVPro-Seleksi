<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kategori</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Kategori</li>
            </ol>

            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td scope="">#</td>
                            <td scope=""> ID Kategori</td>
                            <td scope="">Kategori</td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($allKategori as $kategori) :
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $kategori['CategoryID'] ?></td>
                                <td><?= $kategori['Category'] ?></td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>