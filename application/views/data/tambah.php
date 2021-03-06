<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="POST">

                        <div class="mb-3">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" name="id" class="form-control" id="id">
                            <!-- <div id="id" class="form-text">Masukan Id berupa number</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <!-- <div id="id" class="form-text">Masukan Id berupa number</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="produk1" class="form-label">Produk</label>
                            <input type="text" name="produ" class="form-control" id="produk1">
                            <!-- <div id="id" class="form-text">Masukan Id berupa number</div> -->
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>