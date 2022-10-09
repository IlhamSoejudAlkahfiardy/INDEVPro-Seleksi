<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Author</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Author</li>
            </ol>

            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td scope="">#</td>
                            <td scope="">Author ID</td>
                            <td scope="">Author</td>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($allAuthor as $author) :
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $author['AuthorID'] ?></td>
                                <td><?= $author['Author'] ?></td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>