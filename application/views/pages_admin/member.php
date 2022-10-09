<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Member</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Member</li>
            </ol>

            <div class="tabel">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td scope="">#</td>
                            <td scope=""> ID Member</td>
                            <td scope="">Nama</td>
                            <td scope="">Alamat</td>
                            <td scope="">Telepon</td>
                            <td scope="">No. HP</td>
                            <td scope="">Tanggal</td>
                            <td scope="">Maksimal Peminjaman</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($allMember as $member) :
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $member['MemberID'] ?></td>
                                <td><?= $member['Name'] ?></td>
                                <td><?= $member['Address'] ?></td>
                                <td><?= $member['Phone'] ?></td>
                                <td><?= $member['HP'] ?></td>
                                <td><?= $member['Date'] ?></td>
                                <td><?= $member['MaxLoan'] ?></td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>