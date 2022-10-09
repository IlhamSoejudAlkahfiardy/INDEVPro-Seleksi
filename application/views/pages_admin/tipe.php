<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tipe Buku</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Tipe Buku</li>
            </ol>

            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td scope="">#</td>
                            <td scope="">ID Tipe</td>
                            <td scope="">Tipe</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($allTipe as $tipe) :
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $tipe['TypeID'] ?></td>
                                <td><?= $tipe['Type'] ?></td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>