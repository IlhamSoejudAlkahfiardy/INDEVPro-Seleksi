<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail Buku</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Buku</li>
            </ol>

            <!-- <a href="#" class="btn btn-primary">Tambah Buku</a> -->

            <table class="table table-striped w-75">
                <thead>
                    <tr>
                        <th scope="">Judul</th>
                        <td scope=""><?= $buku['Title'] ?></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="">Pengarang</th>
                        <td scope=""><?= $buku['Author'] ?></td>
                    </tr>
                    <tr>
                        <th scope="">Penerbit</th>
                        <td scope=""><?= $buku['Publisher'] ?></td>
                    </tr>
                    <tr>
                        <th scope="">Kategori</th>
                        <td scope=""><?= $buku['Category'] ?></td>
                    </tr>
                    <tr>
                        <th scope="">Tahun Terbit</th>
                        <td scope=""><?= $buku['Year'] ?></td>
                    </tr>
                    <tr>
                        <th scope="">Dapat Pinjamkan</th>
                        <td scope=""><?= $buku['AllowingToLoan'] ?></td>
                    </tr>
                    <tr>
                        <th scope="">Durasi Peminjaman</th>
                        <td scope=""><?= $buku['DaysToLoan'] ?> hari</td>
                    </tr>
                    <tr>
                        <th scope="">Status</th>
                        <td scope=""><?= $buku['Status'] ?></td>
                    </tr>
                    <tr>
                        <th scope="">Tipe</th>
                        <td scope=""><?= $buku['Type'] ?></td>
                    </tr>
                    <tr>
                        <th scope="">Salinan</th>
                        <td scope=""><?= $buku['Copy'] ?></td>
                    </tr>
                    <tr>
                        <th scope="">Kondisi</th>
                        <td scope=""><?= $buku['Condition'] ?></td>
                    </tr>
                    <tr>
                        <th scope="">Waktu Pembaruan</th>
                        <td scope=""><?= $buku['TimeOfRenewal'] ?> hari</td>
                    </tr>
                    <tr>
                        <th scope="">Barcode</th>
                        <td scope=""><?= $buku['Barcode'] ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </main>
</div>