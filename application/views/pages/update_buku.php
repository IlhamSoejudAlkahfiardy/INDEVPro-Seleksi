<div class="container">
    <h3 class="mt-5">Update Buku</h3>

    <form class="mt-3" action="<?= base_url("Buku/save/$id") ?>" method="POST">
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" name="judul" value="<?= $buku['judul'] ?>">
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku['penerbit'] ?>">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>