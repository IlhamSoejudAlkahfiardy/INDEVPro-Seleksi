<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Masukkan Data User Baru</li>
            </ol>

            <form class="w-50" autocomplete="off" action="<?= base_url('Admin/saveAdd') ?>" method="POST">
                <div class="mb-3">
                    <label for="id" class="form-label">ID User</label>
                    <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name="id" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <label for="level" class="form-label">Level</label>
                <select class="form-select mb-3" aria-label="Default select example" id="level" name="status" required>
                    <option selected>Pilih Status</option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>

        </div>
    </main>
</div>