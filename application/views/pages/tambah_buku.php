<div class="container">
    <h3 class="mt-5">Tambah Buku</h3>

    <form class="mt-3" action="<?= base_url('Buku/insert') ?>" method="POST">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" name="judul">
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>