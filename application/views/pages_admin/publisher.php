<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Publisher</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Publisher</li>
            </ol>

            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td scope="">#</td>
                            <td scope="">ID Publisher</td>
                            <td scope="">Publisher</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($allPublisher as $publisher) :
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $publisher['PublisherID'] ?></td>
                                <td><?= $publisher['Publisher'] ?></td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>